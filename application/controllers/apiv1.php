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

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Apiv1 extends REST_Controller
{
  function reports_get()
  {
    if(!$this->get('id'))
    {
       $this->reports_list_get();
      //  $this->response(array('error' => 'Missing id'), 400);
    }

    // $reports = $this->some_model->getSomething( $this->get('id') );
    //"longitude":2.3775,"latitude":48.4186
    $reports = array(
        1 => array('id'           => 1, 
                   'name'         => 'Automate de service HS', 
                   'description'  => 'Automate de service HS', 
                   'add_date'     => '2014-02-14T11:33:00+02:00', 
                   'end_date'     => '', 
                   'location'     => array('RER A','La Défense Grande Arche'), 
                   'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                   'picture'      => 'http://lorempicsum.com/futurama/350/200/1',
                   'status'       => 'open',
                   'nb_vote_end'  => 100 ),
        2 => array('id'           => 2, 
                   'name'         => 'Ecran d\'information RATP HS', 
                   'description'  => 'Ecran d\'information RATP HS', 
                   'add_date'     => '2014-09-15T19:55:00+02:00', 
                   'end_date'     => '2014-09-17T19:55:00+02:00', 
                   'location'     => array('RER A','La Défense Grande Arche'), 
                   'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                   'picture'      => 'http://lorempicsum.com/futurama/255/200/5',
                   'status'       => 'closed',
                   'nb_vote_end'  => 1 ),      
        3 => array('id'           => 3, 
                   'name'         => 'Portique bloqué', 
                   'description'  => 'Portique bloqué', 
                   'add_date'     => '2013-10-15T10:55:00+02:00', 
                   'end_date'     => '2013-12-01T11:55:00+02:00', 
                   'location'     => array('Ligne 1','Louvre Rivoli'), 
                   'geolocation'  => array('longitude' => 2.3407199,'latitude' => 48.8609428),
                   'picture'      => 'http://lorempicsum.com/futurama/627/200/3',
                   'status'       => 'closed',
                   'nb_vote_end'  => 1 )
    );
    
    $this->load->model('Report');
    $report = $this->Report->get_report($this->get('id'));
    
    if($report)
    {
        $this->response($report, 200); // 200 being the HTTP response code
    }

    else
    {
        $this->response(array('error' => 'report could not be found'), 404);
    }
  }

	function reports_list_get()
  {
    $this->load->model('Report');

    $reports=$this->Report->get_reports();

    	$results= array(
               'metadata' => array('resultset' => array('count'=>count($reports), 'offset'=>0, 'limit' => 3)),
               'results'  => $reports
               );


      if($results)
      {
          $this->response($results, 200); // 200 being the HTTP response code
      }

      else
      {
          $this->response(array('error' => 'No report in database'), 404);
      }
  }

  function reports_put()
  {
    $this->response(array($this->request->body), 200);
  }

  function reports_post()
  {

    $this->load->model('Report');
    foreach ($this->request->body as $key => $value) {
      switch ($key) {
        case 'name':
          $report['name']=$value;
          break;
        case 'location1':
          $report['location']=$value;
          break;
        case 'location2':
          $report['location']=$value;
          break;
        case 'picture': //not reached
         // $report['picture']=$this->_process_picture($value);
          break;
        
        default:
          # code...
          break;
      }
    }

    $the_id=$this->Report->new_report($report['name'],new DateTime('now'),48.233,2.342,'open',isset($report['location'])?$report['location']:null);
    if ($the_id)
    {
      $this->response(array('success' => $the_id), 200);      
    }
    else
    {
      $this->response(array('error' => 'insert failed'), 404);
    }


  }

  function pictures_post() 
  { 
    if (!$this->get('id_reports'))
    {
      $this->response(array('error' => 'missing report id'), 404);
    }
    else
    {
      if(!$this->post('picture')) 
      {
        $this->response(array('error' => 'No picture to upload', 'picture'=>$this->post('picture')), 404);
      }
      
      $data = $this->post('picture', false);
            
      if (preg_match('#^data:image/([^;]+);base64,(.+)$#', $data, $matches, PREG_OFFSET_CAPTURE) != 1)
      {
        print_r($matches);
        $this->response(array('error' => 'Not a picture', 'picture' => $this->post('picture'), 'retour' => $ret), 403);
      } 
      
      log_message('debug', 'Payload mime : ' . $matches[1][0]);
      $picture =imagecreatefromstring(base64_decode($matches[2][0]));
      if ($picture !== false) 
      {
        $this->load->model('Report');
        $url = $this->config->base_url() . $this->Report->update_report_picture($this->get('id_reports'),$picture);
        imagedestroy($picture);
        $this->response(array('success' => $url), 200);
      }
      else 
      {
        $this->response(array('error' => 'Cannot manage the picture', 'picture' => $this->post('picture')), 500);
      }
    }
  }

  function locations_get()
  {

   if(!$this->get('name'))
   {
    $this->location_list_get();
    //  $this->response(array('error' => 'Missing id'), 400);
   }
   $locations = array(
                    array(
                      'id'           => 0x001, 
                      'name'         => 'Ligne 1',
                      'sublocation'  => array( 
                        array('id'    => '0x001001',
                              'name'  => 'La défense Grande arche'),
                        array('id'    => '0x001002',
                              'name'  => 'Esplanade de la Défense')
                    )),
                    array(
                      'id'           => 0x002, 
                      'name'         => 'Ligne 2',
                      'sublocation'  => array( 
                        array('id'    => '0x002001',
                              'name'  => 'Station L2/1'),
                        array('id'    => '0x002002',
                              'name'  => 'Station L2/2')
                    ))
    );

    $results= array(
             'metadata' => array('resultset' => array('count'=>count($locations), 'offset'=>0, 'limit' => 3)),
             'results'  => $locations
             );

    if($results)
    {
        $this->response($results, 200); // 200 being the HTTP response code
    }

    else
    {
        $this->response(array('error' => 'location could not be found'), 404);
    }
  }

  function location_list_get()
  {
    $locations = array(
        array('id'           => 0x001, 
              'name'         => 'Ligne 1'),
        array('id'           => 0x002, 
              'name'         => 'RER A')
    );

    $results= array(
             'metadata' => array('resultset' => array('count'=>count($locations), 'offset'=>0, 'limit' => 3)),
             'results'  => $locations
             );

    if($results)
    {
        $this->response($results, 200); // 200 being the HTTP response code
    }

    else
    {
        $this->response(array('error' => 'location could not be found'), 404);
    }
  }
  public function send_get()
  {
    var_dump($this->_args);
  }

	public function send_post()
	{
		var_dump($this->request->body);
	}


	public function send_put()
	{
		var_dump($this->put('foo'));
	}
}