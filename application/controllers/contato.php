<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        //CARREGA O MODEL
        $this->load->model('contato_model');

    }

    public function index()
    {
        $this->load->view('include/head');
        $this->load->view('include/header');
        $this->load->view('contato/contato');
        $this->load->view('include/footer');
    }

    public function insert()
    {
        $data['nome'] = strip_tags($this->input->post('nome'));
        $data['telefone'] = strip_tags($this->input->post('telefone'));
        $data['email'] = strip_tags($this->input->post('email'));
        $data['assunto'] = strip_tags($this->input->post('assunto'));
        $data['mensagem'] = strip_tags($this->input->post('mensagem'));

        if ($this->contato_model->insert($data)) {

            $nome = $data['nome'];
            $telefone = $data['telefone'];
            $email = $data['email'];
            $assunto = $data['assunto'];
            $mensagem = $data['mensagem'];

            $email_remetente = "disparo@matusaguinchos.kinghost.net";

            $email_destinatario = "mathusaguinchos@gmail.com";
            $email_reply = "$email";
            $email_assunto = "Contato - Mathusa Guinchos";

            $email_conteudo = "<h3><strong>Contato realizado atrevés do site</strong></h3> \n";
            $email_conteudo .= "<br>";
            $email_conteudo .= "<strong>Nome:</strong> $nome \n";
            $email_conteudo .= "<strong>Telefone:</strong> $telefone \n";
            $email_conteudo .= "<strong>Email:</strong> $email \n";
            $email_conteudo .= "<strong>Assunto:</strong> $assunto \n";
            $email_conteudo .= "<strong>Mensagem:</strong> $mensagem \n";

            $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

            if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers))
            {
                echo "enviado";
            } else {
               echo "erro";
            }

        }
        else
        {
            echo "erro";
        }
    }
}
