<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lente_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    

    public $numeroFolio;
    public $montoTotal;
    public $fechaElaboracion;
    public $FK_Optometrista;
    public $FK_Lente;
    public $FK_Cliente;

    

}