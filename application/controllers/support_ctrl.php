<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class support_ctrl extends CI_Controller {
public function index()
	{
		$this->support();
	}
	function support(){
		$this->load->view('header');
		$this->load->view('support_page');
		$this->load->view('footer');
	}
	}
?>