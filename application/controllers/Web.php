<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller{

	function __construct()
	{
		parent::__construct();
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

	public function recibirdatos(){

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



}



 ?>
