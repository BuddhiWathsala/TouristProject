<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*this controller class for navigate(change pages ) in public view
  Not for admin page navigate */
class C_Public_Page_Navigate extends CI_Controller
{

  //view more details about a trip
  public function viewMoreMyTrip($trip_id)
  {
    //view more details of a trip
    //get all from mytrip
		$this->load->model('M_Table_my_trip');
		$results_trip = $this->M_Table_my_trip->getTripFromId($trip_id);

    $data['mytrip_more'] = $results_trip;
    $this->load->view('public/V_View_More_Mytrip',$data);
  }//end viewMoreMyTrip

  //load places to go
  public function placesToGo($place_id)
  {
    //get places details
		$this->load->model('M_Table_places');
		$results_places = $this->M_Table_places->getAll();

    //get place details : specific place
		$this->load->model('M_Table_places');
		$results_place = $this->M_Table_places->getPlaceDetailsWithId($place_id);

    //get admin details
		$this->load->model('M_Admin_table');
		$results_contact = $this->M_Admin_table->getContactDetails();

    $data['specific_place'] = $results_place;
    $data['places'] = $results_places;
    $data['contact'] = $results_contact;
    $this->load->view('public/V_Places_To_Go',$data);

  }//end placesToGo

  public function home($value='')
  {
    //get all from main slider table
		$this->load->model('M_Table_main_slider');
		$results = $this->M_Table_main_slider->getAll();

		//get all from mytrip
		$this->load->model('M_Table_my_trip');
		$results_trip = $this->M_Table_my_trip->getAll();

		//get place details
		$this->load->model('M_Table_places');
		$results_places = $this->M_Table_places->getAllWithLimit();

		//get admin details
		$this->load->model('M_Admin_table');
		$results_contact = $this->M_Admin_table->getContactDetails();

		//get place details
		$this->load->model('M_Table_places');
		$results_all_places = $this->M_Table_places->getAll();

		$data['all_places'] = $results_all_places;
		$data['places'] = $results_places;
		$data['slider_images'] = $results;
		$data['my_trip'] = $results_trip;
		$data['contact'] = $results_contact;
		//print_r($results_trip);
		$this->load->view('public/V_Home_Page',$data);
  }//home

  //load things to do page
  public function thingsToDo()
  {
    //get place details
		$this->load->model('M_Table_places');
		$results_all_places = $this->M_Table_places->getAll();

    //get all from todo table
    $this->load->model('M_Table_todo');
    $results_todo = $this->M_Table_todo->getAll();

    //get admin details
		$this->load->model('M_Admin_table');
		$results_contact = $this->M_Admin_table->getContactDetails();

    $data['places'] = $results_all_places;
    $data['all_todo'] = $results_todo;
    $data['contact'] = $results_contact;

    $this->load->view('public/V_Things_todo',$data);
  }//end thingsToDo

  public function viewMoreTodo($id)
  {
    //get place details
		$this->load->model('M_Table_places');
		$results_all_places = $this->M_Table_places->getAll();

    //get filterde data from todo table
    $this->load->model('M_Table_todo');
    $results_todo = $this->M_Table_todo->getFromId($id);

    //get admin details
		$this->load->model('M_Admin_table');
		$results_contact = $this->M_Admin_table->getContactDetails();

    $data['places'] = $results_all_places;
    $data['todo'] = $results_todo;
    $data['contact'] = $results_contact;

    $this->load->view('public/V_Things_todo_more',$data);
  }
}//end class
