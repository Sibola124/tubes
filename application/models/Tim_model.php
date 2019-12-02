<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_model extends CI_Model
{
    private $_table = "tim";

    public $id_tim;
    public $main;
    public $m;
    public $s;
    public $k;

    public function rules()
    {
        return [
            ['field' => 'm',
            'label' => 'M',
            'rules' => 'numeric'],

            ['field' => 's',
            'label' => 'S',
            'rules' => 'numeric'],

            ['field' => 'k',
            'label' => 'K',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        $query = "SELECT * from tim  ORDER BY poin desc";
        return $this->db->query($query)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tim" => $id])->row();
    }

    public function InputTim()
    {
        $post = $this->input->post();
        $this->id_tim = $post["id_tim"];
        $this->nama = $post["nama"];
        $this->lokasi = $post["lokasi"];
<<<<<<< HEAD
        
        $this->m = $post["m"];
        $this->s = $post["s"];
        $this->k = $post["k"];
        $this->main = $post["m"] + $post["s"] + $post["k"];
        $this->poin = $post["m"]*3 + $post["s"]*1;
=======
        $this->main = $post["main"];
        $this->m = $post["m"];
        $this->s = $post["s"];
        $this->k = $post["k"];
>>>>>>> 2e78e378739fdb83d30c9e83aba1c660b6dc83cb
        $this->db->update($this->_table, $this, array('id_tim' => $post['id_tim']));
    }
}
