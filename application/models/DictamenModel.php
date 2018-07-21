<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DictamenModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    public function getDictamenes(){
            $this->db->select('*');
            $this->db->from('dictamenes');
            $query = $this->db->get();
            $result = $query->result_array();
            if(count($result)>0){
                return $result;
            }
    }

    public function tipodictamenes(){
        $this->db->select('*');
        $this->db->from('tipo_dictamen');
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
    }

    public function getEstados(){
        $this->db->select('*');
        $this->db->from('estados');
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
    }

    public function getDictamenid($id){
        $this->db->select('*');
        $this->db->from('tipo_dictamen');
        $this->db->where('id_dictamen = '.$id);
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
    }

    public function registrardictamen($data){

        try{

          $this->db->trans_begin();
          $this->db->insert('dictamenes',
          array(   'id_usuario' => $this->session->userdata('id_usuario'),
                   'id_tipo_dictamen'=>$data['tipo'],
                   'codigo'=>$data['codigo'],
                   'titulo'=>$data['titulo'],
                   'version'=>0,
                   'sumilla'=>$data['sumilla'],
                   'fec_debate'=>$data['fecha'],
                   'id_estado'=>$data['estado']
               )
         );

         if ($this->db->trans_status() === FALSE)
         {
             $this->db->trans_rollback();
             return "error";
         }
         else
         {
             $this->db->trans_commit();
             return "success";
         }
       }
       catch (Exception $e) {

          return "error";
       }

    }
}
