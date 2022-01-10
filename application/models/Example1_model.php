<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Example1_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function save() {
		echo 'Executando método Save de Model Example1';
	}
}
