
<?php
 
class Uploadfile extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        
    }
 
    function index() {

         $data['products'] = $this->csv_model->get_addressbook();
    }
	  function  import() {
$this->load->view('headeruser');
$this->load->view('import');
$this->load->view('footer');
}
    function importcsv() {
    $session_data = $this->session->userdata('logged_in');
	  $_SESSION['id']=$id=$session_data['id'];
		 
         $config['upload_path'] = './csvuploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '10000';
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload())
		{
            echo 'fail';
        } 
		
		else {
            $file_data = $this->upload->data();
            $file_path =  './csvuploads/'.$file_data['file_name'];
  $this->load->library('csvimport');
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
				
                foreach ($csv_array as $row) {
				
                    $insert_data = array(
'uid' => $id,
'category'=>$row['category'],                 
'brand' =>$row['brand'],
'Product' => $row['Product'],
'Productprice' => $row['Productprice'],
'Manfacturer' =>$row['Manfacturer'],
'SKU' =>$row['SKU'],
'unit_present' =>$row['unit_present'],
'Description' =>$row['Description'],
'ShortDescription' => $row['ShortDescription'],
'image'=>$row['image'],
                    );
					
					 $result = $this->csv_model->insert_csv($insert_data);

               } 
           
            if ($result == true){
 redirect('display_products/addproductview','refresh');
}

else 
               {
			   echo 'Product With this SKU is already uploaded.';
			   }
			}
			else 
               {
			   echo 'fail';
			   }
            }
 
        } 
 
}
?>