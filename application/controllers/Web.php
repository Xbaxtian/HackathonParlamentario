<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('comisionModel');
		$this->load->model('dictamenModel');
	}

	public function index(){
		$dataView = array("view"=>'web/index',"data"=>array());
		$this->load->view('layout',$dataView);
	}

	public function dictamenDetallado(){
		$dataView = array("view"=>'web/dictamenDetallado',"data"=>array());
		$this->load->view('layout',$dataView);
	}

	public function estadisticasDictamen(){
		$dataView = array("view"=>'web/estadisticasDictamen',"data"=>array());
		$this->load->view('layout',$dataView);
	}

	public function suscripcion(){
		$this->load->view("web/suscripcion");
	}

	public function listarcomisiones(){ // LISTA DE comisiones
		$comisiones = $this->comisionModel->getComisiones();
		header('Content-Type: application/json');
    	echo json_encode( $comisiones );
	}

	public function recibircalificacion(){

		$this->form_validation->set_rules("dni", "DNI", "required");

		if ($this->form_validation->run() == FALSE)
        {
			//$this->load->view('relatoria/anadirdictamen',$data);
		}
		else
		{
			$data = array('dni' => $this->input->post("dni"),
						  'codigo' => $this->input->post("codigo"),
						  'comentario' => $this->input->post('comentario'),
					  	  'calificacion'=>$this->input->post('calificacion'));

			$resultado = $this->comisionModel->registrarpuntuacion($data);
			header('Content-Type: application/json');
			echo json_encode(array("result"=>$resultado));
		}
	}

	public function enviarpuntuaciones(){

		$id = $this->input->post('idObj');
		$resultado = $this->dictamenModel->getDictamenid($id);
		$puntuaciones =  $this->comisionModel->obtenerpuntuaciones($id);

		$data = array('resultado'=>$resultado,'puntuaciones'=>$puntiaciones);
		header('Content-Type: application/json');
    	echo json_encode( $data );
	}

	public function recibirsuscripcion(){


		$this->form_validation->set_rules("email", "Email", "required");


		if ($this->form_validation->run() == FALSE)
        {
			//$this->load->view('relatoria/anadirdictamen',$data);
		}
		else
		{
			$data = array('nombres' => $this->input->post("nombre"),
						  'apellidos' => $this->input->post("apellidos"),
						  'email' => $this->input->post('email'),
					  	  'dni'=>$this->input->post('dni'),
					      'telefono'=>$this->input->post('telefono'),
					  	  'comisiones'=> $this->input->post('comisiones'));

			$resultado = $this->comisionModel->registrarsuscribcion($data);
			header('Content-Type: application/json');
			echo json_encode(array("result"=>$resultado));
		}
	}

	public function busqueda(){
		$token = $this->input->post("algo");
		$busqueda = $this->comisionModel->busquedatoken($token);
		header('Content-Type: application/json');
		echo json_encode(array("result"=>$busqueda));
	}


}



 ?>
