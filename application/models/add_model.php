
<?php
class add_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function addproduct($data)
    {
        $query = null; 
        $query = $this->db->get_where('products', array(
			'SKU'=>$data['SKU'],
        ));

        $count = $query->num_rows(); 

        if ($count == 0) {
            $data = array(
			'uid' => $data['uid'],
            'category' => $data['category'],
			'brand'=>$data['brand'],
			'Product'=>$data['Product'],
			'Productprice'=>$data['Productprice'],
			'Manfacturer'=>$data['Manfacturer'],
			'SKU'=>$data['SKU'],
			'unit_present'=>$data['unit_present'],
			'Description'=>$data['Description'],
			'ShortDescription'=>$data['ShortDescription'],
			'image' => $data['image'],
            );
            $this->db->insert('products', $data);
			return true;
        }
		  else
   {
return false;
}
    }
function fetchproduct($id){
$this->db->select('id, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription');
$this->db->from('products');
$this->db->where('ID',$id);
   $query = $this -> db -> get();
    if( $query->num_rows() == true){
	  return $query-> result();
}	
}
function fetchproduct1($id){
$this->db->select('id,url,email,password');
$this->db->from('users');
$this->db->where('ID',$id);
   $query = $this -> db -> get();
    if( $query->num_rows() == true){
	  return $query-> result();
}	
}
function delete($id){
  $this->db->where('id',$id);
	 $this->db->delete('products');
					return true;
}
function delete1($id){
  $this->db->where('id',$id);
	 $this->db->delete('users');
					return true;
}
function updateproduct($data,$id){
  $this->db->where('id',$id);

	 $this->db->update('products', $data);
					return true;
        
		} 
}
function add_image($data)
{
$this->db->insert('uploads',$data);
return true;
}

?>