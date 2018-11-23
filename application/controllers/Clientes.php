<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cliente_model');
		$this->load->model('Recibo_model');
		$this->load->helper('url');	
		session_start();
	}

	public function index()
	{
		// $data = false;
		$data['clientes'] = $this->Cliente_model->allClientes();
		$this->load->view('/shared/header');
		$this->load->view('/clientes/index',$data);
		$this->load->view('/shared/footer');
	}
	
	public function find($id){

	}

	public function create()
	{
		//Si se hace post hacer lo siguiente
		if($this->input->post()){
			$data = array(
				'nombre' => $this->input->post('inputNombre'),
				'apellidoMaterno' => $this->input->post('inputApellidoMaterno'),
				'apellidoPaterno' => $this->input->post('inputApellidoPaterno'),
				'numeroDeCelular' => $this->input->post('inputNumeroDeCelular'),
				'numeroDeCasa' => $this->input->post('inputNumeroDeCasa'),
				'direccion' => $this->input->post('inputDirrecion'),
				'correoElectronico' => $this->input->post('inputCorreoElectronico')
			);
			//Esto me va a regresar el id de la tabla a la que agregue, si va a poner en más campos mandar este id
			$data['id'] = $this->Cliente_model->addCliente($data);	
			redirect('/Clientes/index/');
		}else{
			$this->load->view('/shared/header');
			$this->load->view('/clientes/create');
			$this->load->view('/shared/footer');
		}
		
    }
    
	public function details($id)
	{
		
		$data['cliente'] = $this->Cliente_model->find($id)[0];
		$id = 1;
		$data['recibos'] = $this->Recibo_model->reciboCliente($id);
		$data['deudaTotal'] = $this->Recibo_model->calcularDeuda($id);
		$this->load->view('/shared/header');
		$this->load->view('/clientes/details',$data);
		$this->load->view('/shared/footer');
	}

	public function edit($id = false)
	{
		$data = false;
		$this->load->view('/shared/header');
		$this->load->view('/clientes/edit',$data);
		$this->load->view('/shared/footer');
	}
}