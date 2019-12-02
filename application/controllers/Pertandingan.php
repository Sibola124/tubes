<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pertandingan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Pertandingan_model');
        $this->load->model('Tim_model');
        $this->load->library('form_validation');

    }
    public function index($error = NULL) {
    	$data = array(
            'judul' => 'Pertandingan',
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Pertandingan', $data);
        $this->load->view('templates/footer');  
    }
    public function inputPertandingan() {
        $data['judul'] = 'Input Jadwal Pertandingan';
        $data['tim'] = $this->Tim_model->getAll();
        $pertandingan = $this->Pertandingan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pertandingan->rules());
        if ($validation->run()) {
            $pertandingan->inputJadwal();
        }

        $this->load->view('templates/Navbar', $data);
        $this->load->view('admin/inputPertandingan', $data);
        $this->load->view('templates/footer');  

    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('jadwal');
       
        $pertandingan = $this->Pertandingan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pertandingan->rules());

        if ($validation->run()) {
            $pertandingan->update();
        }

        $data["pertandingan"] = $pertandingan->getById($id);
        if (!$data["pertandingan"]) show_404();
        
        $this->load->view('templates/Navbar', $data);
        $this->load->view("admin/updatePertandingan", $data);
        $this->load->view('templates/footer');  
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        if ($this->Pertandingan_model->delete($id)) {
            redirect(base_url('Jadwal'));
        }
    }

}