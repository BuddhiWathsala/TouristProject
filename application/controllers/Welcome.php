<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
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
	}
}
