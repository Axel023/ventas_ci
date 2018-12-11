<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller { //controlador de autenticacion (sessions)

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		if ($this->session->userdata("login")) { //si la informacion es correcta redirige a dashboard
			redirect(base_url()."dashboard");
		}
		else{
			$this->load->view("admin/login"); //si la informacion es incorrecta redirige nuevamente al login
		}
		

	}

	public function login(){ //usuario y password (modelo#Usuarios_model)
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, sha1($password)); //(toma el password encriptado en sha1())

		//LOGIN
		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombres,
				'rol' => $res->rol_id,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}
//Cerrar sesion (sess_destroy())
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
