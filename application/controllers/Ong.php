<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ong extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model("ong_model");
		//buscaTodos retorna um array com os dados
		$lista = $this->ong_model->buscaTodos();
		//array de ongs pra passar todos os dados por uma unica variavel, nesse caso passo só o array dados com um único array de ongs
		$dados = array("ongs" => $lista);
		$this->load->view("ong/index", $dados);
	}
}
