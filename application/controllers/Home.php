<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('pages/home/index');
	}

	/* Função para o Layout Chady */
	public function teste(){
		$this->load->view('teste/layout/header');
		$this->load->view('teste/pages/index');
		$this->load->view('teste/layout/footer');
	}
}
