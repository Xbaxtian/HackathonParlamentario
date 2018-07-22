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
        $this->db->where('d.codigo = '.$id);
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result[0];
        }
    }

    public function obtenerpuntuaciones($id){
        $this->db->select('calificacion,count(calificacion)');
        $this->db->from('comentarios c');
        $this->db->where('id_dictamen = '.$id);
        $this->db->group_by("calificacion");
        $query = $this->db->get();
        $result = $query->result_array();
        if(count($result)>0){
            return $result;
        }
    }

    public function registrarpuntuacion($data){

    try{

          $this->db->trans_begin();
          $this->db->insert('comentarios',
          array(   'id_dictamen' => $data['codigo']),
                   'dni'=>$data['dni'],
                   'comentario'=>$data['comentario'],
                   'calificacion'=>$data['calificacion']
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
