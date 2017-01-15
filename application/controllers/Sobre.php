<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

    public function index()
    {
        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('sobre/sobre');
        $this->load->view('include/footer');
    }
}
