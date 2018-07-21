<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('adminModel');
	}

	public function index(){
		$dataView = array("view"=>'admin/login',"data"=>array());
		$this->load->view('layout',$dataView);
	}

	public function acceso(){

		$this->form_validation->set_rules("user", "User", "required"); // c
		$this->form_validation->set_rules("pass", "contraseña", "required"); // c

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("admin/login");
		}
		else
		{
			$data = array('user' => $this->input->post('user'), //c
						  'pass' => $this->input->post('pass')); // c

			$resultado = $this->adminModel->getUsuario($data);
			$resultado = $resultado[0];
			if($resultado != false){
				$this->session->set_userdata($resultado);

				$result = array("result"=>"success",'dir'=>base_url()."dictamen");
				header('Content-Type: application/json');
				echo json_encode($result);
			}
			else{
				$result = array('result'=>'fail','msj'=>"Los datos ingresados no son correctos, Por favor vuelve a intertarlo.");
				header('Content-Type: application/json');
				echo json_encode($result);;
			}
		}
	}
}
