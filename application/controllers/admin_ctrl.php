<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_ctrl extends CI_Controller {
public function index()
	{
		$this->admin();
		
	}
	function admin(){
		$this->load->view('headerlogout');
		$this->load->view('admin');
		$this->load->view('footer');

	}
}
?>
