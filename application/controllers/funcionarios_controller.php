<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class funcionarios_controller extends CI_Controller {
    public function listarFuncionarios(){
        $funcionarios = $this->db->get('funcionarios')->result_array();
        $this->load->view('funcionarios_view', ['funcionarios' => $funcionarios]
        );
    }
    
    public function formulario_funcionario() {
        $this->load->view('Add_funcionario_view');
    }
    public function logica_add(){
        echo 'aq  vai a logica ppra add funcionario';
    }
}

