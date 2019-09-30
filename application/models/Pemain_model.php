<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    private $_table = "pemain";

    public $id_pemain;
    public $nama;
    public $usia;
    public $role;
    public $gaji;
    public $tim;

    public function rules()
    {
        return [
            ['field' => 'id_pemain',
            'label' => 'Id Pemain',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'usia',
            'label' => 'Usia',
            'rules' => 'required'],

            ['field' => 'role',
            'label' => 'Role',
            'rules' => 'required'],
            
            ['field' => 'gaji',
            'label' => 'Gaji',
            'rules' => 'required']

            ['field' => 'tim',
            'label' => 'Tim',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pemain = $post["id_pemain"];
        $this->nama = $post["nama"];
        $this->usia = $post["usia"];
        $this->role = $post["role"];
        $this->gaji = $post["gaji"];
        $this->tim = $post["tim"];
        $this->db->insert($this->_table, $this);
    }
}