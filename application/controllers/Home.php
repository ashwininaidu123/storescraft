<?php if (!defined('BASEPATH'))
 exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
public function index() {
 $this->load->view('home');
 }
 
function contact() {
 $this->load->view('contact');
 }
 
function register() {
 if ($this->input->post()) {
 $this->form_validation->set_rules('firstname', 'First name', 'trim|required|xss_clean');
 $this->form_validation->set_rules('lastname', 'Last name', 'trim|required|xss_clean');
 $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
 $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|valid_email');
 $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
 if ($this->form_validation->run() == FALSE) {
 $this->load->view('register');
 } else {
 $fname = $this->input->post('firstname');
 $lname = $this->input->post('lastname');
 $uname = $this->input->post('username');
 $pwd = $this->input->post('password');
 $email = $this->input->post('email');
 $data = array(
 'firstname' => $fname,
 'lastname' => $lname,
 'username' => $uname,
 'password' => MD5($pwd),
 'email' => $email,
 );
 $inserted = $this->user->register($data);
 if ($inserted)
 $this->session->set_flashdata('success', "<div class='success'>Registration successful.</div>");
 else
 $this->session->set_flashdata('failure', "<div class='error'>No registration took place</div>");
 redirect("home/register");
 }
 } else {
 $this->load->view('register');
 }
 }
 
function login() {
 if ($this->input->post()) {
 $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
 $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 if ($this->form_validation->run() == FALSE) {
 $this->load->view('login');
 } else {
 redirect("home/dashboard");
 }
 } else {
 $this->load->view('login');
 }
 }
 
function check_database($password) {
 $username = $this->input->post('username');
 $result = $this->user->login($username, $password);
 if ($result) {
 $sess_array = array();
 foreach ($result as $row) {
 $sess_array = array(
 'id' => $row->id,
 'username' => $row->username
 );
 $this->session->set_userdata('logged_in', $sess_array);
 }
 return TRUE;
 } else {
 $this->form_validation->set_message('check_database', 'Invalid username or password');
 return false;
 }
 }
 
function dashboard() {
 if ($this->session->userdata('logged_in')) {
 $session_data = $this->session->userdata('logged_in');
 $data['username'] = $session_data['username'];
 $this->load->view('dashboard', $data);
 } else {
 redirect('home/login', 'refresh');
 }
 }
 
function logout() {
 $this->session->unset_userdata('logged_in');
 $this->session->sess_destroy();
 redirect('home', 'refresh');
 }
 
}
?>