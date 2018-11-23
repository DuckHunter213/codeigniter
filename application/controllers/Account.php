<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_model');
        $this->load->helper('url');
        session_start();
    }

	public function createUser()
	{

	}

    public function login()
	{
		//si el metodo no es POST carga la pagina principal
        if($this->input->post()){
			#$passwordHash = password_hash($this->input->post('inputPasswordLogin'), PASSWORD_BCRYPT);
			$data = array(
				'password' => $this->input->post('inputPasswordLogin'),
				'correo' => $this->input->post('inputUsuarioLogin')
			);
            if($this->Account_model->find($data)){
                session_start();
                //tengo la sesion del usuario y guardo su nombre
                $_SESSION['usuario'] = $this->input->post('inputUsuarioLogin');
                //esto es para saber si esta conectado
                $_SESSION['logeado'] = true;
                //redirijo al usuario a la pagina principal
                redirect('/');
            }else{
				//manejando el error de la base de datos
				$data['Error'] = "¡Usuario o contraseña incorrectos!.";
				$this->load->view('/shared/headerUser');
				$this->load->view('/account/login',$data);
				$this->load->view('/shared/footer');
			}
        }else{
			$this->load->view('/shared/headerUser');
			$this->load->view('/account/login');
			$this->load->view('/shared/footer');
		}
    }

    public function logout(){
        session_start();
        session_destroy();
        redirect("/");
    }
}
