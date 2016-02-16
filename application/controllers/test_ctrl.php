<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class test_ctrl extends CI_Controller {
function session1(){
         echo $SESSION['email'] = $this->input->post('email11');
         echo $SESSION['password'] = $this->input->post('Password11');
redirect('http://localhost/CodeIgniter/index.php/admin_ctrl/admin');
}
public function index()
	{
		$this->admin();
		$this->load->library('session');
	}
	function admin(){
		$this->load->view('header');
		$this->load->view('test');
		$this->load->view('footer');

	}




function logout(){
$this->session->sess_destroy();
redirect('http://localhost/CodeIgniter/index.php/test_ctrl/');
}

}
?>
