<?php 
class Modelo1 extends CI_Model {
    public function consultar()
    {
        
        $this->db->select('columna1')
        ->from('tabla');
        $resultado = $this->db->get();
        // $resultado = $this->db->get()-result_array();
        $resultado->result_array();
        $resultado->row_array();
        $resultado->num_rows();

        $resultado->resul();
        $res = $resultado->row();
        return $res;
    }
}