<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tim extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Tim_model");
            $this->load->model("Tim1_model");
            $this->load->library('form_validation');
    }

    public function index($error = NULL) {
        $data['judul'] = 'Tim';
    	$data['tim'] = $this->Tim_model->getAll();
    	$data['pos'] = 1;
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim', $data);
        $this->load->view('templates/footer');
    }
    public function tim2($error = NULL) {
        $data['judul'] = 'Team Persija';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/Persija', $data);
        $this->load->view('templates/footer');
    }

    public function tim3($error = NULL) {
        $data['judul'] = 'Team PSM Makassar';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/PSM', $data);
        $this->load->view('templates/footer');
    }

    public function tim4($error = NULL) {
        $data['judul'] = 'Team Barito Putera';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/Barito', $data);
        $this->load->view('templates/footer');
    }

    public function tim5($error = NULL) {
        $data['judul'] = 'Team Sriwijaya FC';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/Sriwijaya', $data);
        $this->load->view('templates/footer');
    }

    public function tim1($error = NULL) {
        $data['judul'] = 'Team PersiBanten';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/PersiBanten', $data);
        $this->load->view('templates/footer');
    }
    public function inputTim($id = null){
        if (!isset($id)) redirect();
       
        $tim = $this->Tim_model;
        $validation = $this->form_validation;
        $validation->set_rules($tim->rules());

        if ($validation->run()) {
            $tim->InputTim();
        }

        $data["tim"] = $tim->getById($id);
        if (!$data["tim"]) show_404();
        
        $this->load->view('templates/Navbar', $data);
        $this->load->view("admin/inputTim", $data);
        $this->load->view('templates/footer');  
    }
}