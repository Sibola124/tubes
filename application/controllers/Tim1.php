<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tim extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Pemain_model");
    }

    public function index($error = NULL) {
        $data['judul'] = 'Pemain';
    	$data['pemain'] = $this->Pemain_model->getAll();
    	$data['pos'] = 1;
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Pemain', $data);
        $this->load->view('templates/footer');
        
        
    }
}