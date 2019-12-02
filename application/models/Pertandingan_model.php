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
        $query = "SELECT * from pertandingan  ORDER BY date asc";
        return $this->db->query($query)->result();
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

    public function gettim1($id)
    {
        $this->db->select('nama');
        $this->db->from('tim');
        $this->db->join('pertandingan', 'pertandingan.tim1 = tim.id_tim');
        $this->db->where('tim1', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function gettim2($id)
    {
        $this->db->select('nama');
        $this->db->from('tim');
        $this->db->join('pertandingan', 'pertandingan.tim2 = tim.id_tim');
        $this->db->where('tim2', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getAlltim1($id)
    {
        $this->db->select('*');
        $this->db->from('tim');
        $this->db->join('pertandingan', 'pertandingan.tim1 = tim.id_tim');
        $this->db->where('tim1', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getAlltim2($id)
    {
        $this->db->select('*');
        $this->db->from('tim');
        $this->db->join('pertandingan', 'pertandingan.tim2 = tim.id_tim');
        $this->db->where('tim2', $id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table1, array("id_pertandingan" => $id));
    }

    
}