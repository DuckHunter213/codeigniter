<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }

    public $PersonaID;
    public $nombre;
    public $apellidoMaterno;
    public $apellidoPaterno;
    public $numeroDeCelular;
    public $numeroDeCasa;
    public $direccion;

    function find($id){
        $query = $this->db->get_where('persona', array('PersonaID' => $id));
        if($query->num_rows() > 0) {
            return $query->result();
        }else{
            false;
        }
    }

    function addCliente($data){

        $this->nombre           = $data['nombre'];
        $this->apellidoMaterno  = $data['apellidoMaterno'];
        $this->apellidoPaterno  = $data['apellidoPaterno'];
        $this->numeroDeCelular  = $data['numeroDeCelular'];
    	$this->numeroDeCasa     = $data['numeroDeCasa'];
        $this->direccion        = $data['direccion'];
        $this->correoElectronico= $data['correoElectronico'];
        
        $this->db->insert('persona', $this);
        $insert_id = $this->db->insert_id();

        
        return  $insert_id;
        // $this->ClienteID        = $data['ClienteID'];
        // $this->db->insert('cliente', $this);
    }
    function allClientes(){
        $query = $this->db->get('persona');
        if($query->num_rows() > 0) {
            return $query;
        }else{
            false;
        }
    }
}
