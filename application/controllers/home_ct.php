<?php
session_start(); //we need to call PHP's session object to access it through CI
class Home_ct extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
	  $_SESSION['id']=$data['id']=$session_data['id'];
     $_SESSION['EMAIL'] = $data['email'] = $session_data['email'];
	    $this->load->view('headeruser');
 $this->load->view('a',$data);
  	$this->load->view('footer');

   }
   else
   {
     //If no session, redirect to login page
     redirect('http://localhost/CodeIgniter', 'refresh');
	
   }
  
 }
 
 function logout()
 { 
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home_ct', 'refresh');
 }
 
}
 
?>