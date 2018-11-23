<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		session_start();
	}

	public function admin(){
		$this->load->view('users/pagina_principal');
	}

	public function index()
	{
		//Redirrecion de logueo
		if(!isset($_SESSION['logeado'])){
			$this->load->view('/shared/headerUser');
			$this->load->view('welcome_message');
			$this->load->view('/shared/footer');
		}else{
			$this->load->view('/shared/header');
			$this->load->view('welcome_message');
			$this->load->view('/shared/footer');
		}
	}
}
