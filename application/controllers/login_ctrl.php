<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_ctrl extends CI_Controller {
function __construct() {
parent::__construct();
}
function index(){

  $this->load->view('header');
$this->load->view('login');
$this->load->view('footer');
//$this->load->model('model');


}

function insertinto(){

$data = array(
'url' => $this->input->post('url_r'),
'email' => $this->input->post('email_r'),
'password' => $this->input->post('password_r')
);
// Transfering Data To Model
$this->load->model('model');
$result = $this->model->form_insert($data);
if($result== True){
  $this->load->view('header');
$this->load->view('welcome_user');
$this->load->view('footer');
}
else{
       $this->load->view('header');
  $this->load->view('dashboard');
  	$this->load->view('footer');   
}
}
}
?>
