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

		$data['slider_images'] = $results;
		$data['my_trip'] = $results_trip;
		//print_r($results_trip);
		$this->load->view('public/V_Home_Page',$data);
	}
}
