<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin_table extends CI_Model {

  public function validate($username,$password)
  {
    $this->load->database();

    $admindata = $this->db->get_where("admin",array('username' => $username));
    if($admindata)
    {

      return $admindata->result();
    }else
    {
      return null;
    }
  }//end validate

  public function getContactDetails()
  {
    $this->load->database();
    $query = "SELECT * FROM admin WHERE username="."'admin'";
    $results = $this->db->query($query);

    return ($results->result());
  }



}//end M_Admin_table
