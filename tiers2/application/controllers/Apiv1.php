<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Api v1
 *
 * This is the report api to declare a broken stuff
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Kevin Lagaisse
 * @link		http://kevin.lagaisse.fr
*/

//@TODO : data validation with form validator
//@TODO : image cropping & resizing
//@TODO : vote multicall protection


// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Apiv1 extends REST_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->methods = ['vote_get' => ['level' => 0, 'limit' => 1, 'time' => 60 * 60 * 24],
                      'vote_post' => ['level' => 0, 'limit' => 1, 'time' => 60 * 60 * 24]];
  }
  protected function validate_data($group='')
  {
      $this->load->library('form_validation');
      $this->_args['form_validation_uniqid'] = uniqid();
      $this->form_validation->set_data($this->_args);
      if ($this->form_validation->run($group) == FALSE)
      {
        $this->response(['error' => $this->form_validation->error_array()], 500);
      }
  }

  function reports_get()
  {
    if($this->get('id') == null)
    {
      if(! $this->get('latitude') && ! $this->get('longitude') && ! $this->get('distance')) {
        $this->reports_list_get();
      }
      else
      {
        $this->reports_geo_get();
      }

    }

    $this->validate_data('apiv1/reports_get');
    //default fallback : return report with id
    $this->load->model('Report');
    $report = $this->Report->get_report($this->get('id'));
    if($report)
    {
      $this->response($report, 200); // 200 being the HTTP response code
    }
    else
    {
      $this->response(['error' => 'report could not be found'], 404);
    }
  }


  function vote_get()
  {
    $this->vote_post();
  }
  function vote_post()
  {
    $this->validate_data('apiv1/reports_get');
    if($this->get('id')==null)
    {
      $this->response(['error' => 'Give me an id to vote'], 404);
    }
    else
    {
      $this->load->model('Report');
      $report = $this->Report->vote_report($this->get('id'));
      if($report)
      {
        $this->response($report, 200); // 200 being the HTTP response code
      }
      else
      {
        $this->response(['error' => 'report could not be found'], 404);
      }
    }
  }

  function reports_list_get()
  {
    $this->validate_data('apiv1/reports_list_get');

    $since_id  = (($this->get('since_id') != null)? $this->get('since_id'):null);
    $reports_count = (($this->get('count') != null)? (int)$this->get('count'):30);

    $this->load->model('Report');
    $reports=$this->Report->get_reports($since_id,$reports_count);
    $results= ['metadata' => ['resultset' => ['count'=>count($reports)]],
               'results'  => $reports];
    if($reports)
    {
      $this->response($results, 200); // 200 being the HTTP response code
    }
    else
    {
      $this->response(['error' => 'No report in database'], 200);
    }
  }

  function reports_geo_get()
  {

    $this->validate_data('apiv1/reports_geo_get');

    $this->load->model('Report');
    $reports=$this->Report->get_reports_bygeo($this->get('latitude'),
                                              $this->get('longitude'),
                                              $this->get('distance'),
                                              $this->get('start'),
                                              $this->get('count'));
    $results= ['metadata' => ['resultset' => ['count'=>count($reports)]],
               'results'  => $reports ];
    if($reports)
    {
      $this->response($results, 200); // 200 being the HTTP response code
    }
    else
    {
      $this->response(['error' => 'No report in database with this parameters'], 200);
    }
  }

  function reports_map_get()
  {

    $this->validate_data('apiv1/reports_geo_get');

    $this->load->model('Report');
    $reports=$this->Report->get_reports_bygeo($this->get('latitude'),
                                              $this->get('longitude'),
                                              $this->get('distance'),
                                              $this->get('start'),
                                              $this->get('count'),
                                              'geojson');
    $results= ['type'     => 'FeatureCollection',
               'features' => $reports];;

    if($reports)
    {//reformat the results in geojson format

      $this->response($results, 200); // 200 being the HTTP response code
    }
    else
    {
      $this->response(['error' => 'No report in database with this parameters'], 200);
    }
  }


  function reports_put()
  {
    $this->response([$this->request->body], 200);
  }

  function reports_post()
  {

    $this->validate_data('apiv1/reports_post');

    $this->load->model('Report');
    $report=[];

    foreach ($this->request->body as $key => $value) {
      switch ($key) {
        case 'name':
          $report['name']=$value;
          break;
        case 'description':
          $report['description']=$value;
          break;
        case 'location1':
          $report['location']=$value;
          break;
        case 'location2':
          $report['location']=$value;
          break;
        case 'geolocation':
          $report['geolocation']=$value;
        case 'datetime':
          $report['datetime']=(new DateTime())->setTimestamp( (int)( ((float) $value)/1000));
          break;
        case 'picture': //not reached
         // $report['picture']=$this->_process_picture($value);
          break;

        default:
          # code...
          break;
      }
    }

    $the_id=false;
    if (isset($report['name'])) {
      $the_id=$this->Report->new_report($report['name'],
                                        isset($report['description'])? $report['description']:null,
                                        isset($report['datetime'])? $report['datetime']:new DateTime('now'),
                                        isset($report['geolocation'])? $report['geolocation']['latitude']:null,
                                        isset($report['geolocation'])? $report['geolocation']['longitude']:null,
                                        'open',
                                        isset($report['location'])? $report['location']:"");
    }
    if ($the_id!=null)
    {
      $this->response(['success' => $the_id], 200);
    }
    else
    {
      $this->response(['error' => 'insert failed'], 500);
    }
  }

  function pictures_post()
  {

    $this->validate_data('apiv1/pictures_post');
    $data = $this->post('picture', false);
    $crop = $this->post('crop');
    $top   =$crop['top'];
    $left  =$crop['left'];
    $width =$crop['width'];
    $height=$crop['height'];

// DEBUT DE A supprimer au passage à CodeIgniter 3 de form_validation
    if (preg_match('#^data:image/([^;]+);base64,(.+)$#', $data, $matches, PREG_OFFSET_CAPTURE) != 1)
    {
      //print_r($matches);
      $this->response(['error' => 'Not a picture', 'picture' => $this->post('picture')], 403);
    }

    log_message('debug', 'Payload mime : ' . $matches[1][0]);
    $data = $matches[2][0];
// FIN DE A supprimer au passage à CodeIgniter 3 de form_validation

    $picture = @imagecreatefromstring(base64_decode($data)); //remove error
    $exif_data = read_exif_data($this->post('picture', false));
    $exif_orientation = 1;
    if ( ($exif_data !== FALSE) && isset($exif_data['Orientation']))
    {
        $exif_orientation = $exif_data['Orientation'];
    }

    if ($picture !== false)
    {
      $this->load->model('Report');
      //check if reports exists
      $report = $this->Report->get_report($this->get('id_reports'));
      if ($report)
      {
        log_message('debug', 'Call update_report_picture with : id_reports '. $this->get('id_reports') .' crop : top : '. $top .' left : ' .$left. ' width : '. $width .' height : '. $height.'');
        $url = $this->config->base_url() . $this->Report->update_report_picture($this->get('id_reports'), $picture, $top, $left, $width, $height, $exif_orientation);
        $this->response(['success' => $url], 200);
      }
      else
      {
        $this->response(['error' => 'report not found'], 404);
      }
      //@imagedestroy($picture); //done in the model processing
    }
    else
    {
      $this->response(['error' => 'Cannot manage the picture', 'picture' => $this->post('picture')], 500);
    }

  }

  function locations_get()
  {

    if($this->get('id')==null)
    {
      if(!$this->get('latitude') && !$this->get('longitude') && !$this->get('distance')) {
        $this->locations_list_get();
      }
      else {
        $this->locations_geo_get();
      }
    }

    $this->validate_data('apiv1/locations_get');
    $this->load->model('Location');
    $locations = $this->Location->get_locationsFromPath("".$this->get('id'));
    $results= ['metadata' => ['resultset' => ['count'=>count($locations)]],
               'results'  => $locations ];

    if($locations)
    {
        $this->response($results, 200); // 200 being the HTTP response code
    }
    else
    {
        $this->response(['error' => 'location could not be found'], 200);
    }
  }

  function locations_list_get()
  {
    $this->load->model('Location');
    $locations = $this->Location->get_locations();

    $results= ['metadata' => ['resultset' => ['count'=>count($locations)]],
               'results'  => $locations];

    if($locations)
    {
        $this->response($results, 200); // 200 being the HTTP response code
    }

    else
    {
        $this->response(['error' => 'locations could not be found'], 200);
    }
  }

  function locations_geo_get()
  {

    $this->validate_data('apiv1/locations_geo_get');

    $this->load->model('Location');
    $locations=$this->Location->get_locations_bygeo($this->get('latitude'),
                                                    $this->get('longitude'),
                                                    $this->get('distance'),
                                                    $this->get('start'),
                                                    $this->get('count'));
    $results= ['metadata' => ['resultset' => ['count'=>count($locations)]],
               'results'  => $locations ];
    if($locations)
    {
      $this->response($results, 200); // 200 being the HTTP response code
    }
    else
    {
      $this->response(['error' => 'No location in database with this parameters'], 200);
    }
  }

  function erreur_post()
  {
      throw new Exception('erreur interne');
  }

  function erreur_get()
  {
      throw new Exception('erreur interne');
  }

    /****************************************************\
      OVERRIDE REST_Controller API_KEY management
      system in order to add a per-IP limit on api calls
      _detect_api_key : if no API_KEY is detected, register
                        the client IP address as
                        an API_KEY

    \*****************************************************/
  /**
   * Detect API Key
   *
   * See if the user has provided an API key
   *
   * @return boolean
   */
  protected function _detect_api_key()
  {
    log_message('debug','debug DETECTING API KEY');
    $ret=FALSE;
    $ret=parent::_detect_api_key();
    if ($ret===FALSE)
    {
      $this->rest->key = $this->input->ip_address();
    }
    return true;

  }

}
