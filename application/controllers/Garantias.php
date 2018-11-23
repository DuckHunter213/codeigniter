<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garantias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');	
	}

	public function index()
	{
		$this->load->view('/shared/header');
		$this->load->view('/Garantias/index');
		$this->load->view('/shared/footer');
    }
    
	public function create()
	{
		$this->load->view('/shared/header');
		$this->load->view('/Garantias/create');
		$this->load->view('/shared/footer');
	}
}