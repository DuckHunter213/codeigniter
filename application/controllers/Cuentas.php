<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas extends CI_Controller {

	public function index()
	{
		$this->load->view('/shared/header');
		$this->load->view('/cuentas/login');
		$this->load->view('/shared/footer');
	}
}
