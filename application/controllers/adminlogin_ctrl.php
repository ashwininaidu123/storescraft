<?php
class adminlogin_ctrl extends CI_controller{
function _construct()
{
 parent::_construct();
// Load session library
$this->load->library('session');
}
function index(){
     $this->load->view('header');
      $this->load->view('adminlogin');
    	$this->load->view('footer');
}

function loginadmin(){
 $email=$this->input->post('email2');
$password=$this->input->post('Password2');
  $this->load->model('lookup');

 $result =$this->lookup->login($email,$password);
 if($result)
   {
  
     $sess_array = array();
     foreach($result as $row)
     {
	  
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
	 	 redirect('home_ct1','refresh');
     return TRUE;

   }
}
}
?>
