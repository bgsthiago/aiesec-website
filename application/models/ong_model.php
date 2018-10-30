<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ong_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

  //Retorna um array com todos os resultados da tabela ong
	public function buscaTodos(){
    return $this->db->get("ong")->result_array();
  }

	//cadastra ong com
	// cnpj: char(18)
	// nome: varchar(60)
	// telefone char(14)
	public function cadastrarOng($ong){
		$this->db->insert("ong", $ong);
	}
}
