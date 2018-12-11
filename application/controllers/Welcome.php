<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { //controlador Welcome por defecto ci, carga la vista del login #admin/login

	public function index()
	{
		$this->load->view("admin/login");

	}
}
