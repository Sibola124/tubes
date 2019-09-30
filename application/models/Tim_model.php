<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    private $_table = "tim";

    public $id_tim;
    public $nama;
    public $poin;
    public $lokasi;
    public $id_pemain;

    public function rules()
    {
        return [
            ['field' => 'id_tim',
            'label' => 'Id Tim',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'poin',
            'label' => 'Poin',
            'rules' => 'required'],
            
            ['field' => 'Lokasi',
            'label' => 'lokasi',
            'rules' => 'required']

            ['field' => 'Id_pemain',
            'label' => 'Id pemain',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tim = $post["id_tim"];
        $this->nama = $post["nama"];
        $this->poin = $post["poin"];
        $this->lokasi = $post["lokasi"];
        $this->id_pemain = $post["id_pemain"];
        $this->db->insert($this->_table, $this);
    }
}