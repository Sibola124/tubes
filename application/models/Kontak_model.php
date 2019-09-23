<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $nama;
    public $email;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Phone Number',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'Message',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = uniqid();
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }
}