<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getUsuario($data){
        $this->db->select('*');
        $this->db->from('visitantes v');
        $this->db->where('v.dni ',$data['dni']);
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
        else{
            return null;
        }
    }


    public function ingresarvisitante($data){
        try{

            $this->db->insert('visitantes', array('dni'=>$data['dni'],'id_region'=>14));
            return "success";

        }
        catch (Exception $e) {
            return "error";
        }
    }


}
