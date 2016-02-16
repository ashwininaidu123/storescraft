<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lookup extends CI_model{
 public function _construct(){
 parent::_construct();
}
 
function login($email,$password){
   $this -> db -> select('id,username, password');
   $this -> db -> from('admin');
   $this -> db -> where('username', $email);
   $this -> db -> where('password',$password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}

function loginuser($email,$password, $url){
$query = $this-> db -> insert ('users' , array( 'url' => $url,'email' => $email,'password' => $password));
return $query;
}
function login1($email,$password){
   $this -> db -> select('id, email, password');
   $this -> db -> from('users');
   $this -> db -> where('email', $email);
   $this -> db -> where('password',$password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
}
/*function sesssion($sess_array){

$condition = "email =" . "'" . $sess_array['email'] . "'";
$this->db->select();
$this->db->from('users');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
  $row = $query->row();
            $data = array(
                    'email' => $row->email,
                    'validated' => true
                    );
					$this->session->set_userdata($data);
				$user_id = $this->session->userdata('validated');
		
               

            return $user_id ;

} else {
return false;
}
}*/
}
?>
