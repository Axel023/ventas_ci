<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function getCategorias(){
		$this->db->where("estado","1"); //query cuando el estado booleano sea 1 "no fue borrado", trae la categoria
		$resultados = $this->db->get("categorias");//tabla
		return $resultados->result();//return con los datos
	}

	public function save($data){
		return $this->db->insert("categorias",$data);//query insert categorias
	}
	public function getCategoria($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("categorias");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("categorias",$data);
	}
}
