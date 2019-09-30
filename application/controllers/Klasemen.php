<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Klasemen extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Tim_model");
    }

    public function index($error = NULL) {
        $data['judul'] = 'Klasemen';
    	$data['tim'] = $this->Tim_model->getAll();
    	$data['pos'] = 1;
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Klasemen', $data);
        $this->load->view('templates/footer');
        
        
    }
}