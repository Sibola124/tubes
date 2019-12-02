<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Comments_model");
		$this->load->library('form_validation');
	}

	public function index() {	
		$data['judul'] = 'Diskusi';
    	$data['komentar'] = $this->Comments_model->pullAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Comments', $data);
        $this->load->view('templates/footer');
	}

	public function new() {
		$data = array(
            'judul' => 'Tambah Komentar',
        );
		$this->form_validation->set_rules('komentar', 'Komentar', 'required');
		if($this->form_validation->run()) {
			$comment = array(
				"id_author" => $this->session->userdata("user")['id'],
				"komentar" => $this->input->post("komentar"),
				"time_update" => null,
				"time_create" => null
			);
			$this->Comments_model->push($comment);
			redirect('/', 'refresh'); 
		}
		$this->load->view('templates/Navbar', $data);
        $this->load->view('newComment', $data);
        $this->load->view('templates/footer');  
	}

	public function editComment($id) {
		$data['judul'] = 'Edit Komentar';
		$komentar['user'] = $this->session->userdata("user");
    	$komentar['komentar'] = $this->Comments_model->pull($id);
		if($user['logged'] && $user['id'] == $komentar['id_author']) {
			$this->load->view('templates/Navbar', $data);
        	$this->load->view('editComment', $komentar);
        	$this->load->view('templates/footer');
			return;
		}
	}

	public function del($id) {
		if($user['logged'] && $user['id'] == $komentar['id_author']) {
			$this->Comments_model->del($id);
			redirect('/', 'refresh');
			return;
		}
	}

	public function edit() {
		
		$komentar 	= $this->input->post('komentar');
		$komentar_id	= $this->input->post('komentar_id');
		$komentar = array("komentar" => $komentar, "komentar_id" => $komentar_id);

		$this->Comments_model->push($komentar, true);
		redirect('/', 'refresh');

	}

	public function pullAll() {
		return $this->Comments_model->pullAll();
	}

}