
<?php
class model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function form_insert($data)
    {
        $query = null; 
        $query = $this->db->get_where('users', array(
            'url' => $data['url'],
			'email'=>$data['email'],
			'password'=>$data['password']
        ));

        $count = $query->num_rows(); //counting result from query

        if ($count === 0) {
            $data = array(
               'url' => $data['url'],
			'email'=> $data['email'],
			'password'=>$data['password']
            );
            $this->db->insert('users', $data);
			return true;
        }
		  else
   {
return false;
}
    }
	
	
	
  function manage(){
$this->db->select('id, url,email,password');
$this->db->from('users');
   $query = $this -> db -> get();
    if( $query->num_rows() == true){
	  return $query-> result();
}	
}
	
}

?>