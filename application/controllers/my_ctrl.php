<?php

class my_ctrl extends CI_controller{
function __construct() {
parent::__construct();

}
function index(){
$this->user();
}
function user(){
 $this->load->view('headeruser');
  $this->load->view('a');
  	$this->load->view('footer');
}
}
?>