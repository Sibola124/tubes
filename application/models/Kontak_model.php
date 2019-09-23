<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    private $_table = "kontak";

    public $nama;
    public $email;
    public $telp;
    public $pesan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'telp',
            'label' => 'Phone Number',
            'rules' => 'required'],
            
            ['field' => 'pesan',
            'label' => 'Message',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->telp = $post["telp"];
        $this->pesan = $post["pesan"];
        $this->db->insert($this->_table, $this);
    }
}