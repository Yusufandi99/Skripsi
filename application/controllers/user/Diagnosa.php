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

    public function pilihan()
	{
       // $data["gejala"] = $this->M_diagnosa->pilihan();
        $this->load->view('user/pilihan');
        //$gejala_semua       = $this->input->post('gejala[]');
        //$data['id_gejala']=$this->M_diagnosa->pilihan($gejala_semua);
        //$data['id_gejala']      = $gejala_semua;
        //$where = array('id_gejala' => $gejala_semua);
       // print_r($data);
    }
    
    public function hasil()
	{
        //$data["gejala"] = $this->M_diagnosa->hasil();
        $name = count($this->input->post('kondisi[]'));
        $name_semua       = $this->input->post('kondisi');
        $data['kondisi']      = $name_semua;
        print_r($data);
       // $this->load->view('user/hasil');
	}
}
