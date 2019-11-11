<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    public function index($error = NULL) {
        $data = array(
            'judul' => 'Login Page',
            'action' => site_url('login/inputlogin'),
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('login', $data);
        $this->load->view('templates/footer');
        
    }
    public function inputlogin() {
        $this->load->model('Login_model');
        $login = $this->Login_model->checklogin($this->input->post('username'), $this->input->post('password'));
        if ($login == 1) {
            $row = $this->Login_model->data_login($this->input->post('username'),$this->input->post('password'));
            $data = array(
                'logged' => TRUE,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
            redirect(site_url('Home'));
        } else {
            $error = 'username / password salah';
            $this->index($error);
        }
    }
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}

