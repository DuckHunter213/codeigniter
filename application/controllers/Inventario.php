<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Inventario_model');
        $this->load->model('Cliente_model');
		$this->load->helper('url');	
    }
    
    public function index(){
        $this->load->view("/shared/header");
        $this->load->view("/inventario/index");
        $this->load->view("/shared/footer");
    }
    
    public function create(){
        if($this->input->post()){
            //Condiciones del post
            redirect("/Inventario/index");
        }

        $data['optometristas'] = $this->Cliente_model->getClientes();
        $this->load->view("/shared/header");
        $this->load->view("/inventario/lente/create",$data);
        $this->load->view("/shared/footer");
    }
}