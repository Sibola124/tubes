<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Klasemen extends CI_Controller {
    public function index($error = NULL) {
    	$data = array(
            'judul' => 'Klasemen',
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Klasemen', $data);
        $this->load->view('templates/footer');
        
    }
}