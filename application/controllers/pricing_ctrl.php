<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pricing_ctrl extends CI_Controller {
public function index()
	{
		$this->pricing();
	}
	function pricing(){
		$this->load->view('header');
		$this->load->view('pricing_view');
		$this->load->view('footer');
	}
	}
?>