<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_user');
        $this->load->helper('url');
       
}

	public function index()
	{
        $data["user"] = $this->M_user->tampil_data()->result_array();
        $this->load->view('admin/user',$data);
        
	}
 
   
}
