<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class header_ctrl extends CI_Controller {
public function index()
	{
		$this->header();

	}
	function dashboard(){
		$this->load->view('header');
		$this->load->view('login_ctrl');
		$this->load->view('footer');
	
	}

	
}
?>
