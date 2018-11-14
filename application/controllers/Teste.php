<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

	function __construct(){
		parent::__construct();
    }
    
	/* Função para o Layout Chady */
	public function home(){
		$this->load->view('teste/layout/header');
		$this->load->view('teste/pages/index');
		$this->load->view('teste/layout/footer');
	}

	public function painel(){
		$this->load->view('teste/dashboard/layout/layout');
		$this->load->view('teste/dashboard/index');
    }
	
	public function cadastrarIntercambista(){
		$this->load->view('teste/dashboard/layout/layout');
		$this->load->view('teste/dashboard/form-intercambista');
	}

	public function cadastrarBuddies(){
		$this->load->view('teste/dashboard/layout/layout');
		$this->load->view('teste/dashboard/form');
	}

	public function cadastrarOngs(){
		$this->load->view('teste/dashboard/layout/layout');
		$this->load->view('teste/dashboard/form');
	}

	public function cadastrarPontosTuristicos(){
		$this->load->view('teste/dashboard/layout/layout');
		$this->load->view('teste/dashboard/form');
	}
}
