<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeadmin extends CI_Controller {

	
	public function index()
	{
	 	$this->load->model('M_hamapenyakit');
        $this->data['hp'] =  $this->M_hamapenyakit->total_rows();
        $this->data['gejala'] =  $this->M_hamapenyakit->total_row();
        $this->data['pengobatan'] =  $this->M_hamapenyakit->total();
        $this->data['pencegahan'] =  $this->M_hamapenyakit->total_r();
        $this->data['pengetahuan'] =  $this->M_hamapenyakit->total_p();
        $this->data['user'] =  $this->M_hamapenyakit->total_u();
        $this->data['aturan'] =  $this->M_hamapenyakit->total_a();
        $this->data['hasil'] =  $this->M_hamapenyakit->total_h();
      	$this->load->view('admin/homeadmin',$this->data);
	}
}
