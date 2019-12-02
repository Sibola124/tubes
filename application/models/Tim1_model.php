<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tim1_model extends CI_Model
{
    private $_table = "pemain";

    public $id_pemain;
    public $nama;
    public $usia;
    public $role;
    public $gaji;
    public $tim;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pemain" => $id_pemain])->row();
    }
}
