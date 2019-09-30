<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model
{
    private $_table = "pertandingan";

    public $id_pertandingan;
    public $tim1;
    public $tim2;
    public $score1;
    public $score2;
    public $date;
    public $poin;

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
            'rules' => 'required'],
            
            ['field' => 'score2',
            'label' => 'Score 2',
            'rules' => 'required']

            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required']

            ['field' => 'poin',
            'label' => 'Poin',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pertandingan = uniqid();
        $this->tim1 = $post["tim1"];
        $this->tim2 = $post["tim2"];
        $this->score1 = $post["score1"];
        $this->score2 = $post["score2"];
        $this->date = $post["date"];
        $this->poin = $post["poin"];
        $this->db->insert($this->_table, $this);
    }
}