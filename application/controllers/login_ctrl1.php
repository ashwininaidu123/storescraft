<?php

class Login_ctrl1 extends CI_controller{
function index(){

}

function _construct()
{
 parent::_construct();
// Load session library
$this->load->library('session');
}
function login1(){
$password=$this->input->post('Password11');
 $email = $this->input->post('email11');
 $this->load->model('lookup');
   //query the database
   $result = $this->lookup->login1($email, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
	 	 redirect('home_ct','refresh');
     return TRUE;

   }
   else
   {
       $this->load->view('header');
  $this->load->view('dashboard1');
  	$this->load->view('footer');   
   }
}

}
?>

