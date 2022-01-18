<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('M_produk');
        $this->load->helper('url');
		}
    public function index()
    {
       
        $data["data"] = $this->M_produk->tampil_data()->result_array();
        $this->load->view('produk',$data);
    }

    public function tambah_aksi(){
      
          //tampung data dari form
         $id_produk = $this->input->post('id_produk');
         $nama_produk = $this->input->post('nama_produk');
         $harga = $this->input->post('harga');
         $kategori = $this->input->post('kategori');
         $status = $this->input->post('status');
   
        $data = array(
             'id_produk' => $id_produk,
             'nama_produk' => $nama_produk,
             'harga' => $harga,
             'kategori' => $kategori,
             'status' => $status,
         );
        $this->M_produk->input_data($data,'data');
         redirect('produk');
 }

 function edit(){
    $id_produk = $this->input->post('id_produk');
    $nama_produk = $this->input->post('nama_produk');
    $harga = $this->input->post('harga');
    $kategori = $this->input->post('kategori');
    $status = $this->input->post('status');
     $data = array('id_produk' => $id_produk, 'nama_produk' => $nama_produk, 'harga' => $harga, 'kategori' => $kategori, 'status' => $status,);
     $this->M_produk->edit_data($id_produk, $data);
     redirect('produk');
    // print_r($status);           
 }

 function hapus($id_produk){
    $where = array('id_produk' => $id_produk);
    $this->M_produk->hapus_data($where,'data');
    redirect('produk');
   }
   
   }
