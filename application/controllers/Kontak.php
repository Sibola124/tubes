<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kontak_model");
        $this->load->library('form_validation');
    }

    public function add()
    {
        $data['judul'] = 'Contact Us';
        $kontak = $this->Kontak_model;
        $validation = $this->form_validation;
        $validation->set_rules($kontak->rules());
        $this->load->view('templates/Navbar', $data);
        $this->load->view("Contact",$data);
        $this->load->view('templates/footer');
        if ($validation->run()) {
            $kontak->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            $this->load->view('templates/Navbar', $data);
        }
        else{
            $this->load->view('templates/Navbar', $data);
        }
    }
}
