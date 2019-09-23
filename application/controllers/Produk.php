<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Produk_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'All';
        $data['produk'] = $this->Produk_model->getAll();
        $this->load->view('templates/Navbar', $data);
        $this->load->view('admin/shop_all', $data);
        $this->load->view('templates/footer');
        
    }

    public function add()
    {
        $data['judul'] = 'Input Produk';
        $produk = $this->Produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());
        $this->load->view('templates/Navbar', $data);
        $this->load->view("admin/input",$data);
        $this->load->view('templates/footer');

        if ($validation->run()) {
            $this->load->library('upload');
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'jpeg|jpg|png';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $this->upload->do_upload();
                $dataInfo[$i] = $this->upload->data();
            }
            $image1 = $dataInfo[0]['file_name'];
            $image2 = $dataInfo[1]['file_name'];
            $produk->save($image1,$image2);
            redirect(base_url());
        }
        
    }

    public function edit($id = null)
    {
        $data['judul'] = 'Edit Produk';
        $produk = $this->Produk_model;
        $data["produk"] = $produk->getById($id);
       
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());
        $this->load->view('templates/Navbar', $data);
        $this->load->view("admin/edit",$data);
        $this->load->view('templates/footer');

        if ($validation->run()) {
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'jpeg|jpg|png';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $this->upload->do_upload();
                $dataInfo[$i] = $this->upload->data();
            }
            $image1 = $dataInfo[0]['file_name'];
            $image2 = $dataInfo[1]['file_name'];
            $produk->update($image1,$image2);
            redirect(base_url());
        }
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Produk_model->delete($id)) {
            redirect(base_url());
        }
    }
}
