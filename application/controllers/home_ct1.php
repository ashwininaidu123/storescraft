<?php
session_start(); //we need to call PHP's session object to access it through CI
class Home_ct1 extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {

   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
 $_SESSION['EMAIL'] = $data['email'] = $session_data['email'];
$_SESSION['id']=$data['id']=$session_data['id'];
	    $this->load->view('headerlogout');
 $this->load->view('admin',$data);
  	$this->load->view('footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('http://localhost/CodeIgniter/index.php/adminlogin_ctrl', 'refresh');
	
   }
  
 }
 function logout()
 { 
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home_ct1', 'refresh');
 }
 
}
 
?>