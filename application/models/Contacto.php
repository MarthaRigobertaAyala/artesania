<?php
    class Contacto extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function insertar($datos){
            //consultar active record en CodeIgniter a los 2 lados (1 hoja) poner graficos
            //INYECTION SQL 1 HOJA PARA LOS 2 CONSULTAS
            return $this->db->insert("contacto",$datos);
        }
        //FUNCION PARA CONSULTAR INSTRUCTORES
        function obtenerTodos(){
            //segun active record para ser seguro al injection sql
            $listadoContacto=$this->db->get("contacto");
            //en caso ode que se encuetre vacio
            if($listadoContacto->num_rows()>0){
                return $listadoContacto->result();
            }else{
                return false;
            }
        }
        function borrar($id_con)
        {
          //delete from instructor where id_ins=1 // pero puede hacerse sql injection
          $this->db->where("id_con",$id_con);
          if ($this->db->delete("contacto")){
            return true;
          } else {
            return false;
          }
        }
        //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
        function obtenerPorId($id_con){
          $this->db->where("id_con",$id_con);
          $contacto=$this->db->get("contacto");
          if($contacto->num_rows()>0){
            return $contacto->row();
          }
          return false;
        }
        //FUNCION PARA ACTUALIZAR UN PEDIDO
        function actualizar($id_con, $datosEditados)
        {
          $this->db->where("id_con",$id_con);
          return $this->db->update('contacto', $datosEditados);
        }
    }//CIERRE DE LA CLASE
?>
