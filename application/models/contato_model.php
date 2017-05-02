<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Contato_model extends CI_Model
{
    //CADASTRAR REGISTRO.
    function insert($data)
    {
        return $this->db->insert('contato', $data);
    }
}