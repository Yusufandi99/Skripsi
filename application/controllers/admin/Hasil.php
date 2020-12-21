<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_hasil');
        $this->load->helper('url');
       
}

	public function index()
	{
        $data["hasil"] = $this->M_hasil->tampil_data()->result_array();
        $this->load->view('admin/hasil',$data);
        
	}
 
   
}
