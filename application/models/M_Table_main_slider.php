<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Table_main_slider extends CI_Model
{
  //get all details from main slider
  public function getAll()
  {
    $this->load->database();
    $query = "SELECT * FROM main_slider";
    $results = $this->db->query($query);

    return ($results->result());
  }
}
