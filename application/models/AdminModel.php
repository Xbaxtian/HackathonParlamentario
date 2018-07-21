<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getUsuario($data){
        $this->db->select('*');
        $this->db->from('usuarios u');
        $this->db->where('u.id_usuario ',$data['user']);
        $this->db->where('u.pass ',$data['pass']);
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }


}
