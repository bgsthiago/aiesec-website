<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ong_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function buscaTodos(){
    //retult->array pega tudo da tabela ong
    return $this->db->get("ong")->result_array();
  }
}
