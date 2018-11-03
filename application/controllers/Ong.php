<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ong extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("ong_model");
	}

	public function index(){
		$this->load->view("pages/ong/index");
	}

	public function listar(){
		//buscaTodos retorna um array com os dados
		$lista = $this->ong_model->buscaTodos();
		//array de ongs pra passar todos os dados por uma unica variavel, nesse caso passo só o array dados com um único array de ongs
		$dados = array("ongs" => $lista);
		$this->load->view("pages/ong/listar", $dados);
	}

	public function add(){
		$this->load->view("pages/ong/cadastro");
	}

	public function salvar(){
		$ong = array(
			"cnpj" =>$this->input->post("cnpj"),
			"nome" =>$this->input->post("nome"),
			"telefone" =>$this->input->post("telefone")
		);
		$this->ong_model->cadastrarOng($ong);
		//$this->session->set_flashdata("success", "Usuário cadastrado com sucesso!");
		redirect('CadastrarOng');
	}

	public function editar($cnpj = NULL){
		if($id == NULL){
			redirect('/');
		}
		$lista = $this->ong_model->getOngByCnpj($cnpj);

		if($lista == NULL){
			redirect('/');
		}
		$dados = array("ongs" => $lista);

		$this->load->view('editar.php', $dados);
	}

}
