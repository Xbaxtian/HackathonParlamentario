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

	public function recibirdatos(){
		
	}

}



 ?>
