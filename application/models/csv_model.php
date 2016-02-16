
 <?php
class Csv_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
 
    }
 
    function get_addressbook() {     
        $query = $this->db->get('products');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
 
    function insert_csv($data) {
	
	 $query = $this->db->get_where('products', array(
			'SKU'=>$data['SKU'],
			'uid'=>$data['uid']
        ));

        $count = $query->num_rows(); 

        if ($count == 0) {
        $this->db->insert('products', $data);
		return true;
		}
    }
}
?>