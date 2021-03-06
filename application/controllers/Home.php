<?php

class Home extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Home_model");
            $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/Navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function logedIn()
    {
        $data['judul'] = 'Home';
        $data['username'] = $this->session->userdata('username');
        $this->load->view('templates/NavbarLogedIn', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

}