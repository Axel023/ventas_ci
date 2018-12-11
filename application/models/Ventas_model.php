<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {
    public function getComprobantes(){
        $resultados = $this->db->get("tipo_comprobante");
        return $resultados->result();    
    }


}