<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class OtherPage extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	// http://localhost/local/ci/learning/index.php/otherpage
	public function index() {
		echo 'This is the other page';
	}
}
