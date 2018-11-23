<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public $InventarioID;
    public $entradaArmazones;
    public $fechaDeEntrada;

    public function find($id){
        $query = $this->db->get_where('inventario', array('InventarioID' => $id));
        if($query->num_rows() > 0) {
            return $query->result();
        }else{
            false;
        }
    }



}