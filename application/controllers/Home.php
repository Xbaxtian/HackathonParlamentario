<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index(){
		$dataView = array("view"=>'home/formulario',"data"=>array());
		$this->load->view('layout',$dataView);
	}

	public function acceso(){

		$this->form_validation->set_rules("email", "Email", "required"); // c
        $this->form_validation->set_rules("pass", "contraseña", "required"); // c

		if ($this->form_validation->run() == FALSE)
        {
			$this->load->view("home");
        }
		else
		{
			$data = array('email' => $this->input->post('email'),
                          'pass' => $this->input->post('pass'));
            $this->load->model('loginModel');
            $resultado = $this->loginModel->getUsuario($data);
            $resultado = $resultado[0];
            if($resultado != false){
                $this->session->set_userdata($resultado);
                $result = array("result"=>"success",'dir'=>base_url()."admin");
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
