
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class display_products extends CI_Controller {
function __construct() {
parent::__construct();
  $this->load->helper('url');
   global $brand1;
   
}
function index(){
   global $brand1;

}
function search(){
$session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];
$keyword    =   $this->input->post('keyword');
 $this->load->model('pdf_model');
$data['result'] =   $this->pdf_model->search1($keyword,$id);

$this->load->view('headeruser');
$this->load->view('search',$data);
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
$this->addproductview();
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
$this->addproductview();
}
 }
 
 function addfilter(){
$brand1 = $_REQUEST['values'];
$session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];  
 $brand2 =array_filter(array_map('trim',explode(",", $brand1)));
  $this->load->model("pdf_model"); 
   $data["result"]=$this->pdf_model->brand2($brand2, $id);
   $this->load->view('p',$data);
}
 function addfilter1(){
 $brand4 = $_REQUEST['values1'];
 $session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];
   $this->load->model('pdf_model');
$data = $this->pdf_model->cata1($brand4,$id);
    foreach ($data as $row){
 $catid = $row -> id;
}
 $data['result'] = $this->pdf_model->brandcata($catid);
$this->load->view('b',$data);
}
 function addfilter3(){
	 
 $brand8 = $_REQUEST['values'];
 $session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];
 $brand21 =array_filter(array_map('trim',explode(",", $brand8)));
   $this->load->model('pdf_model');
 $data["result"] = $this->pdf_model->brandcata1($brand21,$id);
$this->load->view('p',$data);
}



 
function addproductview(){
$session_data = $this->session->userdata('logged_in');
 $_SESSION['id']=$id=$session_data['id'];
	  
  $this->load->model('pdf_model');
  $data['result'] = $this->pdf_model->pdf($id);
  $data['result1'] = $this->pdf_model->cata($id);
  $data['result2'] = $this->pdf_model->brand($id);
$this->load->view('headeruser');
$this->load->view('product_view',$data);
$this->load->view('footer');
   }


  function addproductviewadmin(){
  
  $this->load->model('pdf_model');
  $data['result'] = $this->pdf_model->pdfadmin();
   if($data)
   {
$this->load->view('headerlogout');
$this->load->view('admin_view',$data);
$this->load->view('footer');
   }
   else
   {
$this->load->view('headerlogout');
$this->load->view('noproduct');
$this->load->view('footer');
   }
   } 
function manageuser(){
  $this->load->model('model');
  $data['result'] = $this->model->manage();
   if($data)
   {
$this->load->view('headerlogout');
$this->load->view('adminuser',$data);
$this->load->view('footer');
   }
}
function catalog(){
echo $catalog = $_REQUEST['values1'];
$result1 =array_filter(array_map('trim',explode(",", $catalog)));
$this->load->view('pdfadmin',$result1);
}
function catalog1(){
echo $catalog = $_REQUEST['values1'];
$result1['res'] =array_filter(array_map('trim',explode(",", $catalog)));
$this->load->view('pdfadmin',$result);
}
}
?> 