<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adduser_ctrl extends CI_Controller {
function __construct() {
parent::__construct();

}
function index(){
  $this->load->view('headeruser');
$this->load->view('adduser');
$this->load->view('footer');
//$this->load->model('model');
}
function add()
{

$password=$this->input->post('Passwordu');
 $email = $this->input->post('emailu');
 $url = $this->input->post('urlu');
 $this->load->model('lookup');
   //query the database
   $result = $this->lookup->loginuser($email, $password,$url);
 
   if($result)
   {
    echo 'inserted';
     return TRUE;

   }
   else
   {
       $this->load->view('header');
  $this->load->view('dashboard');
  	$this->load->view('footer');   
   }
   

	}
function userupdate()
{

$password=$this->input->post('p_name1');
 $email = $this->input->post('b_name1');
 $url = $this->input->post('c_name1');
 $this->load->model('model');
  $data['result'] = $this->model->manage();
  if($data)
   {
$this->load->view('headerlogout');
$this->load->view('adminuser',$data);
$this->load->view('footer');
   }
	}
}
?>


  