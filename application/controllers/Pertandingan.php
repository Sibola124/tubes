<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pertandingan extends CI_Controller {
    public function index($error = NULL) {
    	$data = array(
            'judul' => 'Pertandingan',
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Pertandingan', $data);
        $this->load->view('templates/footer');
        
    }
}