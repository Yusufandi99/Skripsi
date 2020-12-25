<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index() {
        $this->load->view('user/login');
    }

    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' => md5($this->input->post('password', TRUE))
            );
        $this->load->model('Auth_model'); // load Auth_model
        $hasil = $this->Auth_model->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['id_user'] = $sess->id_user;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='admin') {
                redirect('admin/homeadmin');
            }
            elseif ($this->session->userdata('level')=='user') {
                redirect('user/login');
            }       
        }
        else {
            //echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
            print_r($data);
        }
    }

}

?>