<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public $CuentaID;
    public $correo;
    public $password;

    function find($data){
		$query = $this->db->get_where('cuenta', array('correo' => $data['correo']));
        if($query->num_rows() > 0) {
            $row = $query->row();
			return password_verify($data['password'], $row->password);
        }else{
            return false;
        }
    }
}
