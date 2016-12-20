<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos extends CI_Controller {

    public function index()
    {
        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('servicos/servicos');
        $this->load->view('include/footer');
    }
}
