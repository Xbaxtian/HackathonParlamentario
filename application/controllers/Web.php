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

<<<<<<< HEAD
	public function suscripcion(){
		$this->load->view("web/suscripcion");
	}
=======
>>>>>>> 7913b485d63a6e80794d0c9afc10cdfebb5be423
}



 ?>
