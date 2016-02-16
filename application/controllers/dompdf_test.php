<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Dompdf_test extends CI_Controller {
 
    /**
     * Example: DOMPDF 
     *
     * Documentation: 
     * http://code.google.com/p/dompdf/wiki/Usage
     *
     */
    public function index() {   
        // Load all views as normal
        $this->load->view('pdf');
        // Get output html
      
        //$this->dompdf->stream("welcome.pdf");
    }
}
?>