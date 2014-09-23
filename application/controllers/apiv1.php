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
  function report_get()
  {
      if(!$this->get('id'))
      {
          $this->response(array('error' => 'Missing id'), 400);
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
      
      $report = @$reports[$this->get('id')];
      
      if($report)
      {
          $this->response($report, 200); // 200 being the HTTP response code
      }

      else
      {
          $this->response(array('error' => 'report could not be found'), 404);
      }
  }

	function reports_get()
  {


      // $reports = $this->some_model->getSomething( $this->get('id') );
/*     $reports = array(
               array('id'           => 1, 
                     'name'         => 'Automate de service HS', 
                     'description'  => 'Automate de service HS', 
                     'add_date'     => '2014-02-14T11:33:00+02:00', 
                     'end_date'     => '', 
                     'location'     => array('RER A','La Défense Grande Arche'), 
                     'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                     'picture'      => 'http://lorempicsum.com/futurama/350/200/1',
                     'status'       => 'open',
                     'nb_vote_end'  => 100 ),
               array('id'           => 2, 
                     'name'         => 'Ecran d\'information RATP HS', 
                     'description'  => 'Ecran d\'information RATP HS', 
                     'add_date'     => '2014-09-15T19:55:00+02:00', 
                     'end_date'     => '2014-09-17T19:55:00+02:00', 
                     'location'     => array('RER A','La Défense Grande Arche'), 
                     'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                     'picture'      => 'http://lorempicsum.com/futurama/255/200/5',
                     'status'       => 'closed',
                     'nb_vote_end'  => 1 ),      
               array('id'           => 3, 
                     'name'         => 'Portique bloqué', 
                     'description'  => 'Portique bloqué', 
                     'add_date'     => '2013-10-15T10:55:00+02:00', 
                     'end_date'     => '2013-12-01T11:55:00+02:00', 
                     'location'     => array('Ligne 1','Louvre Rivoli'), 
                     'geolocation'  => array('longitude' => 2.3407199,'latitude' => 48.8609428),
                     'picture'      => 'http://lorempicsum.com/futurama/627/200/3',
                     'status'       => 'closed',
                     'nb_vote_end'  => 1 )
  );*/

     	$reports = array(
               'metadata' => array('resultset' => array('count'=>3, 'offset'=>0, 'limit' => 3)),
               'results'  => array(
                             array('id'           => 1, 
                                   'name'         => 'Automate de service HS', 
                                   'description'  => 'Automate de service HS', 
                                   'add_date'     => '2014-02-14T11:33:00+02:00', 
                                   'end_date'     => '', 
                                   'location'     => array('RER A','La Défense Grande Arche'), 
                                   'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                                   'picture'      => 'http://lorempicsum.com/futurama/350/200/1',
                                   'status'       => 'open',
                                   'nb_vote_end'  => 100 ),
              			         array('id'           => 2, 
                                   'name'         => 'Ecran d\'information RATP HS', 
                                   'description'  => 'Ecran d\'information RATP HS', 
                                   'add_date'     => '2014-09-15T19:55:00+02:00', 
                                   'end_date'     => '2014-09-17T19:55:00+02:00', 
                                   'location'     => array('RER A','La Défense Grande Arche'), 
                                   'geolocation'  => array('longitude' => 2.2418684,'latitude' => 48.8911407),
                                   'picture'      => 'http://lorempicsum.com/futurama/255/200/5',
                                   'status'       => 'closed',
                                   'nb_vote_end'  => 1 ),      
                             array('id'           => 3, 
                                   'name'         => 'Portique bloqué', 
                                   'description'  => 'Portique bloqué', 
                                   'add_date'     => '2013-10-15T10:55:00+02:00', 
                                   'end_date'     => '2013-12-01T11:55:00+02:00', 
                                   'location'     => array('Ligne 1','Louvre Rivoli'), 
                                   'geolocation'  => array('longitude' => 2.3407199,'latitude' => 48.8609428),
                                   'picture'      => 'http://lorempicsum.com/futurama/627/200/3',
                                   'status'       => 'closed',
                                   'nb_vote_end'  => 1 ))
      );
	
    	
      if($reports)
      {
          $this->response($reports, 200); // 200 being the HTTP response code
      }

      else
      {
          $this->response(array('error' => 'No report in database'), 404);
      }
  }

  function report_put()
  {
    $this->response('', 200);
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