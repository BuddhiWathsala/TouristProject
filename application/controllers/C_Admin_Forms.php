<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin_Forms extends CI_Controller
{

  //validate admin login
  public function adminLogin()
  {

    if(!isset($_POST['username']) || !isset($_POST['password']))
    {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/adminLoginPage');
      return;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    $this->load->model('M_Admin_table');
    $this->load->model('M_Common_Functions');
    $admindata = $this->M_Admin_table->validate($username,$password);
    $encryptedPassword = crypt($password,$admindata[0]->password);

    if(count($admindata)<=0)
    {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/V_Admin_Login');
      return;
    }
    if($admindata[0]->password == $encryptedPassword)
    {
      $_SESSION['admin'] = "admin";
      $this->load->view('admin/V_Admin_Profile');
    }else
    {
      $this->load->library('session');
      $_SESSION['loginMessage'] = "Incorrect Username/Password";
      $this->load->view('admin/V_Admin_Login');
    }

  }
}
