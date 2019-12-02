<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pertandingan_model extends CI_Model
{
    private $_table1 = "pertandingan";
    private $_table2 = "tim";
    public $id_pertandingan;
    public $tim1;
    public $tim2;
    public $score1;
    public $score2;
    public $date;

    public function rules()
    {
        return [
            ['field' => 'tim1',
            'label' => 'Tim 1',
            'rules' => 'required'],

            ['field' => 'tim2',
            'label' => 'Tim 2',
            'rules' => 'required'],

            ['field' => 'score1',
            'label' => 'Score 1',
            'rules' => 'numeric'],
            
            ['field' => 'score2',
            'label' => 'Score 2',
            'rules' => 'numeric'],

            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required']

        ];
    }

    public function inputJadwal()
    {
        $post = $this->input->post();
        $this->tim1 = $post["tim1"];
        $this->tim2 = $post["tim2"];
        $this->date = date("Y/m/d", strtotime($post["date"]));
        $this->db->insert($this->_table1, $this);
    }
    public function getAll()
    {
        return $this->db->get($this->_table1)->result();
    }
 
    public function getById($id)
    {
        return $this->db->get_where($this->_table1, ["id_pertandingan" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pertandingan = $post["id_pertandingan"];
        $this->tim1 = $post["tim1"];
        $this->tim2 = $post["tim2"];
        $this->score1 = $post["score1"];
        $this->score2 = $post["score2"];
        $this->date = date("Y/m/d", strtotime($post["date"]));
        $this->db->update($this->_table1, $this, array('id_pertandingan' => $post['id_pertandingan']));
    }

    public function gettim($id)
    {
        $this->db->select($id);
        $this->db->from('pertandingan');
        $this->db->join('tim', 'pertandingan.$id = tim.$id');
        $query = $this->db->get();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table1, array("id_pertandingan" => $id));
    }

    
}