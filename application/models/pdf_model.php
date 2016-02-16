

 <?php
class pdf_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }


 function search1($keyword,$id)
    {
		$this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
        $this -> db -> where('uid',$id);
        $this -> db -> from('products');
        $this->db->like('category',$keyword);
        $this->db->or_like('brand',$keyword);
        $this->db->or_like('Product',$keyword);
        $this->db->or_like('Manfacturer',$keyword);
        $this->db->or_like('Productprice',$keyword);
        $query = $this -> db -> get();
        
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
    }
  function  addcata($data){ 
   $query = null; 
        $query = $this->db->get_where('catagory', array(
			'catagory'=>$data['catagory'],
			'uid'=>$data['uid'],
        ));

        $count = $query->num_rows(); 

        if ($count == 0) {
$this->db->insert('catagory',$data);
}
return true;
   }
  function  addbrand($data){ 
    $query = null; 
        $query = $this->db->get_where('brand', array(
			'brand'=>$data['brand'],
				'uid'=>$data['uid'],
        ));

        $count = $query->num_rows(); 

        if ($count == 0) {
$this->db->insert('brand',$data);
}
return true;
   }
   
	 function pdf($id){ 
   $this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
      $this -> db -> where('uid',$id);
   $this -> db -> from('products');
   $query = $this -> db -> get();
 
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
   }
   	 function pdf1($id,$brand2){ 
   $this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
      $this -> db -> where(array('uid'=>$id,
	  'category'=> $brand2));
   $this -> db -> from('products');
   $query = $this -> db -> get();
 
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
   }
    function   cata($id){ 
   $this -> db -> select('*');
      $this -> db -> where('uid',$id);
   $this -> db -> from('catagory');
   $query = $this -> db -> get();
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
   }
   
    function cata1($brand4,$id){	
   $this -> db -> select('id','uid','catagory');
      $this -> db -> from('catagory');
      $this -> db -> where('catagory',$brand4);
      $this -> db -> where('uid',$id);
   $query = $this -> db -> get();
   if($query -> num_rows() > 0)
   { 
    return $query->result();
   }
   }

   
   
    function brand($id){ 
   $this -> db -> select('brand');
      $this -> db -> where('uid',$id);
   $this -> db -> from('brand');
   $query = $this -> db -> get();
 
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
   }
       function brandcata($catid){
   $this -> db -> select('brand');
      $this -> db -> where('cid',$catid);
   $this -> db -> from('brand');
   $query = $this -> db -> get();
 
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
  }	   

    function brandcata1($brand21,$id) {   
	$this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
	$this -> db -> from('products');  
	$this -> db -> where_in('brand', $brand21);
    $this -> db -> where('uid',$id);
    $query = $this -> db -> get();   
    return $query->result(); 
  }

     function brand2($brand2,$id) {   
	$this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
	$this -> db -> from('products');
	$this -> db -> where_in('category', $brand2);
	 $this -> db ->  where_in('uid',$id);	
    $query = $this -> db -> get();   
    return $query->result(); 
  }

  
   
    function pdfadmin(){ 
   $this -> db -> select('id, uid, category, brand,Product,Productprice,Manfacturer,SKU,unit_present,Description,ShortDescription,image');
 
   $this -> db -> from('products');
   $query = $this -> db -> get();
 
   if($query -> num_rows() > 0)
   { 
   return $query->result();
   }
   }
   }
   ?>