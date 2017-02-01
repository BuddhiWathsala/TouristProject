<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Table_my_trip extends CI_Model
{
  //get all details from main slider
  public function getAll()
  {
    $this->load->database();
    $query = "SELECT * FROM my_trip ORDER BY trip_id DESC";
    $results = $this->db->query($query);

    return ($results->result());
  }
}
