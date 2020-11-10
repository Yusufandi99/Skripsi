<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aturan extends CI_Model {

         public function __construct()
    {
        $this->load->database();
    }

	function tampil_data($id_hp){
		    // $this->db->select('aturan.*, gejala.gejala, hp.nama_hp');
 //$this->db->from('aturan');
 //$this->db->join('gejala','gejala.id_gejala = aturan.id_gejala');
 //$this->db->join('hp','hp.id_hp = aturan.id_hp');
//  $this->db->where('aturan.id_hp', $id_hp);
                $query = $this->db->query("SELECT aturan.*,hp.nama_hp,gejala.gejala FROM aturan INNER JOIN hp ON aturan.id_hp = hp.id_hp INNER JOIN gejala ON gejala.id_gejala = aturan.id_gejala ");
        return $query;
	}

    function get(){
        return $this->db->get('hp');
    }

    function gets(){
        return $this->db->get('gejala');
    }

            function input_data($data,$table){
                $this->kode    = $_POST['id_aturan'];   
        $this->db->insert($table,$data);
                return $this->db->get('aturan');

    }
    public function kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_aturan,1)) as id_aturan from aturan");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->id_aturan)+1;
                $kd = sprintf("%1s", $tmp);
            }
        }else{
            $kd = "1";
        }
        
        return "G".$kd;
    }

    
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

      function edit_data($where,$data){
        $this->db->where('id_aturan', $where);
        $this->db->update('aturan',$data);
    



   
}
}