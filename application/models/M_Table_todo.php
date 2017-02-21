<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Table_todo extends CI_Model
{

  //get all details from todo table
  public function getAll()
  {
    $this->load->database();
    $query = "SELECT * FROM todo ORDER BY id DESC";
    $results = $this->db->query($query);

    return ($results->result());
  }//end get all

  //get all details from id
  public function getFromId($id)
  {
    $this->load->database();
    $query = "SELECT * FROM todo WHERE id=$id";
    $results = $this->db->query($query);

    return ($results->result());
  }//end getFromId($id)
}//end class

?>
