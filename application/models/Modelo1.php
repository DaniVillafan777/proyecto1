<?php 
// namespace Modelos;
class Modelo1 extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function consultar()
    {
        // return $this->db;
        return $this->db->get('users')->result_array();
        // $this->db->select()
        // ->from('users');
        // $resultado = $this->db->get();
        // // $resultado = $this->db->get()-result_array();
        // $resultado->result_array();
        // $resultado->row_array();
        // $resultado->num_rows();

        // $resultado->resul();
        // $res = $resultado->row();
        // return $res;
    }
    public function insertar_datos($datos)
    {
        return $this->db->insert_batch('users', $datos);
    }
}