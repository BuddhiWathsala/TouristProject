<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Table_places extends CI_Model
{
  //get all details from places table with a limit
  public function getAllWithLimit()
  {
    $this->load->database();
    $query = "SELECT * FROM places ORDER BY place_id DESC";
    $results = $this->db->query($query);

    return ($results->result());
  }// end getAllWithLimit

  //get all details from places table
  public function getAll()
  {
    $this->load->database();
    $query = "SELECT * FROM places ORDER BY place_id DESC";
    $results = $this->db->query($query);

    return ($results->result());
  }// end getAllWithLimit

  public function getPlaceDetailsWithId($place_id)
  {
    $this->load->database();
    $query = "SELECT * FROM places WHERE place_id = $place_id";
    $results = $this->db->query($query);

    return ($results->result());
  }//end getPlaceDetailsWithId
}//end M_Table_places
