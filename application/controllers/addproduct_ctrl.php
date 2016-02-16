<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addproduct_ctrl extends CI_Controller {
function __construct() {
parent::__construct();
$this->load->helper(array('form', 'url'));

}
function index(){

}
function addviwe(){
$session_data = $this->session->userdata('logged_in');
	  $_SESSION['id']=$id=$session_data['id'];
	    $this->load->model('pdf_model');
  $data['result'] = $this->pdf_model->cata($id);
  $data['result1'] = $this->pdf_model->brand($id);
  $this->load->view('headeruser');
$this->load->view('addproduct', $data);
$this->load->view('footer');
}
function addcata(){
$session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];  
$data = array(
'uid' => $id,
'catagory' => $this->input->post('catat'),
);
  $this->load->model('pdf_model');
  $data= $this->pdf_model->addcata($data);
if($data){
$this->addviwe();
}
 } 

   function addbrand(){
$session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];  
$data = array(
'uid' => $id,
'brand' => $this->input->post('brand'),
);
  $this->load->model('pdf_model');
  $data= $this->pdf_model->addbrand($data);
if($data){
$this->addviwe();
}
 }
function addproduct(){
global $file;
$session_data = $this->session->userdata('logged_in');
	  $_SESSION['id']=$id=$session_data['id'];
if($this->input->post('upload'))
{
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload())
{
$error = array('error' => $this->upload->display_errors());
$this->load->view('product_view', $error);
}
else
{
$data = $this->upload->data();

$file= $data['raw_name'].$data['file_ext'];

$data = array(
'uid' => $id,
'category' => $this->input->post('c_name'),
'brand' => $this->input->post('b_name'),
'Product' => $this->input->post('p_name'),
'Productprice' => $this->input->post('p_price'),
'Manfacturer' => $this->input->post('manf'),
'SKU' => $this->input->post('sku'),
'unit_present' => $this->input->post('unit'),
'Description' => $this->input->post('des'),
'ShortDescription' => $this->input->post('sdes'),
'image'=> $file
);
}
}

// Transfering Data To Model
$this->load->model('add_model');
$result = $this->add_model->addproduct($data);

if($result== True){
 redirect('display_products/addproductview','refresh');
}

else{

       $this->load->view('headeruser');
  $this->load->view('addproduct');
  	$this->load->view('footer');   
}
}


}
?>
