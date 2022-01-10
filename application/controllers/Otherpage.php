<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class OtherPage extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	// http://localhost/local/ci/learning/index.php/otherpage
	public function index() {
		$this->load->helper('form');
		$this->load->view('otherform');
	}

	public function receiver() {
		echo 'Página Recebedora';
	}
}
