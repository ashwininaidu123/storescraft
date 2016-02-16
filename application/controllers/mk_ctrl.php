<?php
session_start();
class mk_ctrl extends CI_controller{
function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
    echo $_SESSION['id'] =$session_data['id'];
    echo $_SESSION['EMAIL'] = $session_data['email'];
 
     $this->load->view('a', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
 
   }
  
 }
}
?>