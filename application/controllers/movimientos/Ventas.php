<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model("Ventas_model");
        $this->load->model("Clientes_model");
    }
//Funcion Carga vista (list)
    public function index(){
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ventas/list");
        $this->load->view("layouts/footer");
    }
//Intento de array cargar comprobantes #No funciona error de syntaxis
    public function add(){
        $data = array(
            "tipocomprobantes" => $this->Ventas_model->getComprobantes(),
            "clientes" => $this->Clientes_model->getClientes()
        );
        

//Cargar Ventas funciona aveces
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("admin/ventas/add",$data);   //$data;
        $this->load->view("layouts/footer");
    }
}