<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Cliente_model');
	}

	public function index()
	{
		$this->load->view('/shared/header');
		$this->load->view('/ventas/index');
		$this->load->view('/shared/footer');
    }
    public function create($id)
	{
		$data = false;
		if(!empty($id)){
			$data['cliente'] = $this->Cliente_model->find($id)[0];
		}
		$this->load->view('/shared/header');
		$this->load->view('/ventas/create',$data);
		$this->load->view('/shared/footer');
	}
}