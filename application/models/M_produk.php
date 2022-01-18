<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {


          public function __construct()
    {
        $this->load->database();
    }

	function tampil_data(){
        $this->db->select('*');
        $this->db->from('data');
        $this->db->where('status','bisa dijual');
        return $this->db->get();
		//return $this->db->get('data');
    }
    function input_data($data,$table){
       // $this->kode    = $_POST['id_hp'];	
       $this->db->insert($table,$data);
       return $this->db->get('data');

}
function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    function edit_data($where,$data){
        $this->db->where('id_produk', $where);
       $this->db->update('data',$data); 
  
}
}