<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_model extends CI_Model
{
    private $_table = "tim";

    public $id_tim;
    public $nama;
    public $lokasi;
    public $id_pemain;
 

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tim" => $id_tim])->row();
    }

}
