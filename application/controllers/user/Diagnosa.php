<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_diagnosa');
        $this->load->helper('url');
    }
    
	public function index()
	{
        $data["gejala"] = $this->M_diagnosa->tampil_data()->result_array();
        $this->load->view('user/diagnosa',$data);
    }

    public function hasil()
	{
        $data["gejala"] = $this->M_diagnosa->hasil();
        $this->load->view('user/hasil',$data);
	}
}
