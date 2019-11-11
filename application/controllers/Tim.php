<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tim extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
            $this->load->model("Tim_model");
            $this->load->model("Tim1_model");
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
        $data['judul'] = 'Tim1';
        $data['pemain'] = $this->Tim1_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim/Tim1', $data);
        $this->load->view('templates/footer');
    }

    public function inputTim()
    {
        //$data['judul'] = 'Input Tim';
        $tim = $this->Tim_model;
        $validation = $this->form_validation;
        $validation->set_rules($tim->rules());
        $this->load->view('templates/Navbar', $data);
        $this->load->view("Tim",$data);
        $this->load->view('templates/footer');

        if ($validation->run()) {
            $this->load->library('upload');
            $files = $_FILES;
            $_FILES['userfile']['name']= $files['userfile']['name'];
            $_FILES['userfile']['type']= $files['userfile']['type'];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'];
            $_FILES['userfile']['error']= $files['userfile']['error'];
            $_FILES['userfile']['size']= $files['userfile']['size'];    

            $config['upload_path']          = './images/logo/';
            $config['allowed_types']        = 'jpeg|jpg|png';

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload();
            $dataInfo = $this->upload->data();
            
            $image = $dataInfo['file_name'];
            $produk->save($image);
            redirect(base_url());
        }
        
    }
}