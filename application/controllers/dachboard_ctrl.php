<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dachboard_ctrl extends CI_Controller {

function index(){

}


function login2( )
{

$password=$this->input->post('Password');
 $email = $this->input->post('email_d');
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
  $this->load->view('dashboard');
  	$this->load->view('footer');   
   }
   

	}
}
?>
