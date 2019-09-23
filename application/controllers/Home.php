<?php

class Home extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Produk_model");
            $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Home';
        $data['produk'] = $this->Produk_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
    public function stockist()
    {
        $data['judul'] = 'Home';
        $this->load->view('templates/Navbar', $data);
        $this->load->view('stockist');
        $this->load->view('templates/footer');
    }

}