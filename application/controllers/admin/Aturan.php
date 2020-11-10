<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan extends CI_Controller {

    function __construct(){
        parent::__construct();      
        $this->load->model('M_aturan');
        $this->load->helper('url');
       
}

	public function index()
	{
 
       $dariDB = $this->M_aturan->kode();
        $data = array('id_aturan' => $dariDB);
        $data["hp"] = $this->M_aturan->get()->result_array();
        $data["gejala"] = $this->M_aturan->gets()->result_array();
        $data["aturan"] = $this->M_aturan->tampil_data('$id_hp')->result_array();
        $this->load->view('admin/aturan',$data);
        
	}
    public function tambah_aksi(){
              $id_aturan = $this->input->post('id_aturan');
              $id_hp = $this->input->post('id_hp');
              $id_gejala = $this->input->post('id_gejala');
     
               $data = array(
                'id_aturan' => $id_aturan,
                'id_hp' => $id_hp,
              'id_gejala' => $id_gejala,
              
        );
               $this->M_aturan->input_data($data,'aturan');
        redirect('admin/aturan');
 
            
    }

     function edit(){
    
        $id_aturan = $this->input->post('id_aturan');
        $id_hp = $this->input->post('id_hp');
        $id_gejala = $this->input->post('id_gejala');
        
        $data = array('id_aturan' => $id_aturan, 'id_hp' => $id_hp,'id_gejala' => $id_gejala,);
        $this->M_aturan->edit_data($id_aturan, $data);
            redirect('admin/aturan');
         //print_r($data);

    }



function hapus($id_hp){
    $where = array('id_hp' => $id_hp);
    $this->M_aturan->hapus_data($where,'aturan');
    redirect('admin/aturan');
   }

   
}
