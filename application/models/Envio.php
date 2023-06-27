<?php
    class Envio extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function insertar($datos){
            //consultar active record en CodeIgniter a los 2 lados (1 hoja) poner graficos
            //INYECTION SQL 1 HOJA PARA LOS 2 CONSULTAS
            return $this->db->insert("envio",$datos);
        }
        //FUNCION PARA CONSULTAR INSTRUCTORES
        function obtenerTodos(){
            //segun active record para ser seguro al injection sql
            $listadoEnvio=$this->db->get("envio");
            //en caso ode que se encuetre vacio
            if($listadoEnvio->num_rows()>0){
                return $listadoEnvio->result();
            }else{
                return false;
            }
        }
        //BORRAR IPEDIDOS
        //"id_ins" de la b.dd
        //$id_ins del formulario
        function borrar($id_env)
        {
          //delete from instructor where id_ins=1 // pero puede hacerse sql injection
          $this->db->where("id_env",$id_env);
          if ($this->db->delete("envio")){
            return true;
          } else {
            return false;
          }
        }
        //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
        function obtenerPorId($id_env){
          $this->db->where("id_env",$id_env);
          $envio=$this->db->get("envio");
          if($envio->num_rows()>0){
            return $envio->row();
          }
          return false;
        }
        //FUNCION PARA ACTUALIZAR UN PEDIDO
        function actualizar($id_env, $datosEditados)
        {
          $this->db->where("id_env",$id_env);
          return $this->db->update('envio', $datosEditados);
        }
    }//CIERRE DE LA CLASE
?>
