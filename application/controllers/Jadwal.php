<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Jadwal extends CI_Controller {
    public function index($error = NULL) {
    	$data = array(
            'judul' => 'Jadwal',
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Jadwal', $data);
        $this->load->view('templates/footer');
        
    }
}