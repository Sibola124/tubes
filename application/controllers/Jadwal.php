<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Jadwal extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Pertandingan_model');
        $this->load->model('Tim_model');
    }

    public function index($error = NULL) {
        $data['judul'] = 'Jadwal Pertandingan';
        $data['pertandingan'] = $this->Pertandingan_model->getAll();
        $data['tim1'] = $this->Pertandingan_model->getAll();
        $data['tim2'] = $this->Pertandingan_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Jadwal', $data);
        $this->load->view('templates/footer');
        
    }
}