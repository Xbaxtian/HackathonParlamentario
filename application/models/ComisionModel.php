<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComisionModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getComisiones(){
            $this->db->select('*');
            $this->db->from('comisiones');
            $this->db->where('activo = 1');
            $query = $this->db->get();
            $result = $query->result_array();
            if(count($result)>0){
                return $result;
            }
    }

    public function getcomisiondictamen($id){
        $this->db->select('*');
        $this->db->from('dictamenes d');
        $this->db->join('dictamen_comision dc','d.id_dictamen = dc.id_dictamen');
        $this->db->join('comisiones c','dc.id_comision = c.id_comision');
        $this->db->where('d.id_dictamen = '.$id);
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result[0];
        }
    }

}
