<?php

class Funcionarios_model extends CI_model
{
    public function get(){
        return $this->db->get('funcionarios')->rusult_array();
    }
}