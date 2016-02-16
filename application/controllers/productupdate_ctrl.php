
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productupdate_ctrl extends CI_Controller {
function __construct() {
parent::__construct();
}
 
function index()
    {
      
  $this->load->view('headeruser');
$this->load->view('product_update');
$this->load->view('footer');
//$this->load->model('model');
}
function displaypage(){
$id=$_REQUEST['id'];
 $this->load->model('add_model');
$data['result'] = $this->add_model->fetchproduct($id);

 $this->load->view('headeruser');
$this->load->view('product_update',$data);
$this->load->view('footer');
}
function displaypage1(){
$id=$_REQUEST['id'];
 $this->load->model('add_model');
$data['result'] = $this->add_model->fetchproduct1($id);
 $this->load->view('headeruser');
$this->load->view('user_update',$data);
$this->load->view('footer');
}
function delete(){
$id=$_REQUEST['id'];
$this->load->model('add_model');
$result = $this->add_model->delete($id);

if($result== True){
 redirect('display_products/addproductview','refresh');

}
}
function delete1(){
$id=$_REQUEST['id'];
$this->load->model('add_model');
$result = $this->add_model->delete1($id);

if($result== True){
 redirect('display_products/manageuser','refresh');
}
}
function productupdate(){
$id=$_REQUEST['id'];
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
$result = $this->add_model->updateproduct($data,$id);

if($result== True){
 redirect('display_products/addproductview','refresh');
}
}
function productpdf(){
$session_data = $this->session->userdata('logged_in');
	  $_SESSION['id']=$data['id']=$session_data['id'];
  $this->load->view('pdf',$data);
}

function productpdfadmin(){
  $this->load->view('pdfadmin');
}
function userupdate(){
$id=$_REQUEST['id'];
$data = array(
'url' => $this->input->post('c_name1'),
'email' => $this->input->post('b_name1'),
'password' => $this->input->post('p_name1'),
);

// Transfering Data To Model
$this->load->model('add_model');
$result = $this->add_model->updateproduct($data,$id);

if($result== True){
 redirect('display_products/addproductview','refresh');
}
}
}
?>

