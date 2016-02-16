<?php
class admin_model extends CI_Model{

function isEmailExist($email) {
    $this->db->select('email');
	$this->db->from('users')
    $this->db->where('email', $email);
	 $this -> db -> limit(1);
    $query = $this->db->get();


    if ($query->num_rows() == 1) {
      return $query->result();
	  echo 'success';
		}
		else {
        return false;
    }
}
}
?>
