<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cadastrarOng extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("ong_model");
	}

	public function index(){
		$this->load->view("pages/ong/cadastro");
	}

	public function inserirCadastro(){
		$ong = array(
			"cnpj" =>$this->input->post("cnpj"),
			"nome" =>$this->input->post("nome"),
			"telefone" =>$this->input->post("telefone")
		);
		$this->ong_model->cadastrarOng($ong);
		//$this->session->set_flashdata("success", "Usuário cadastrado com sucesso!");
		redirect('CadastrarOng');
	}
}
