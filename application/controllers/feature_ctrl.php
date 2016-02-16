<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class feature_ctrl extends CI_Controller {
public function index()
	{
		$this->features();
	}
	function features(){
		$this->load->view('header');
		$this->load->view('features');
		$this->load->view('footer');
	}
	}
?>