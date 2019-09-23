<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public $id;
    public $nama;
    public $harga = 0;
    public $jenis;
    public $jumlah = 0;
    public $img;
    public $img2;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($image1,$image2)
    {
        $post = $this->input->post();
        // $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->img = $image1;
        $this->img2 = $image2;
        $this->db->insert($this->_table, $this);
    }

    public function update($image1,$image2)
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->img = $image1;
        $this->img2 = $image2;
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
