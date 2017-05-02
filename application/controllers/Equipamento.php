<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipamento extends CI_Controller {

    public function index()
    {
        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('equipamento/equipamento');
        $this->load->view('include/footer');
    }
}
