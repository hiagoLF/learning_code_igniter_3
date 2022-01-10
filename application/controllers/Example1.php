<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Example1 extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Example1_model', 'example1_nick');
		// Vai me ajudar a carregar alguns arquivos como de CSS
		$this->load->helper('url');
	}

	// http://localhost/local/ci/learning/index.php/example1
	public function index() {
		$data['title'] = 'This is my first View';
		$data['content'] = 'Este é um texto criado apenas para testar o Codeigniter';

		$this->load->view('example1', $data);
	}

	// http://localhost/local/ci/learning/index.php/example1/login
	public function login() {
		echo 'Executando método Login <br />';
		echo 'Parâmetro passado: '.$this->uri->segment(3);
	}
	
	// http://localhost/local/ci/learning/index.php/example1/login
	public function testmodel() {
		$this->example_nick->save();
	}
}
