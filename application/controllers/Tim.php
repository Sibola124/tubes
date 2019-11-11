<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tim extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Tim_model");
    }

    public function index($error = NULL) {
        $data['judul'] = 'Tim';
    	$data['tim'] = $this->Tim_model->getAll();
    	$data['pos'] = 1;
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim', $data);
        $this->load->view('admin/inputTim');
        $this->load->view('templates/footer');
    }
    public function tim1($error = NULL) {
        $data['judul'] = 'Tim';
        $data['tim'] = $this->Tim_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/Tim1', $data);
        $this->load->view('templates/footer');
    }
}