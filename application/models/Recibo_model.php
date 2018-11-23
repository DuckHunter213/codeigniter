<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recibo_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    

    public $numeroFolio;
    public $montoTotal;
    public $fechaDeElaboracion;
    public $FK_Optometrista;
    public $FK_Lente;
    public $FK_Cliente;

    function find($id){
        $query = $this->db->get_where('recibo', array('ReciboID' => $id));
        if($query->num_rows() > 0) {
            return $query->result();
        }else{
            false;
        }
    }

    function reciboCliente($id){
        $query = $this->db->get_where('recibo', array('FK_Cliente' => $id));
        if($query->num_rows() > 0) {
            return $query;
        }else{
            false;
        }
    }
    function calcularDeuda($id){
        $total = 0;
        $query = $this->db->get_where('recibo', array('FK_Cliente' => $id));
        foreach($query->result() as $recibo){
            $total += $recibo->montoTotal;
        }
        return $total;
    }
}
   