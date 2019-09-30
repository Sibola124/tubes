<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tim extends CI_Controller {
    public function index($error = NULL) {
    	$data = array(
            'judul' => 'Tim',
            'error' => $error
        );
        $this->load->view('templates/Navbar', $data);
        $this->load->view('Tim',$data);
        $this->load->view('templates/footer');
    }
}