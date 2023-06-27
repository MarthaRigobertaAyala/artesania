<?php
    class Pedido extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function insertar($datos){
            //consultar active record en CodeIgniter a los 2 lados (1 hoja) poner graficos
            //INYECTION SQL 1 HOJA PARA LOS 2 CONSULTAS
            return $this->db->insert("pedido",$datos);
        }
        //FUNCION PARA CONSULTAR INSTRUCTORES
        function obtenerTodos(){
            //segun active record para ser seguro al injection sql
            $listadoPedidos=$this->db->get("pedido");
            //en caso ode que se encuetre vacio
            if($listadoPedidos->num_rows()>0){
                return $listadoPedidos->result();
            }else{
                return false;
            }
        }
        //BORRAR IPEDIDOS
        //"id_ins" de la b.dd
        //$id_ins del formulario
        function borrar($id_ped)
        {
          //delete from instructor where id_ins=1 // pero puede hacerse sql injection
          $this->db->where("id_ped",$id_ped);
          if ($this->db->delete("pedido")){
            return true;
          } else {
            return false;
          }
        }
        //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
        function obtenerPorId($id_ped){
          $this->db->where("id_ped",$id_ped);
          $pedido=$this->db->get("pedido");
          if($pedido->num_rows()>0){
            return $pedido->row();
          }
          return false;
        }
        //FUNCION PARA ACTUALIZAR UN PEDIDO
        function actualizar($id_ped, $datosEditados)
        {
          $this->db->where("id_ped",$id_ped);
          return $this->db->update('pedido', $datosEditados);
        }
        //otra forma de hacer el borrar
        // function borrar($id_ins)
        // {
        //   $this->db->where("id_ind",$id_ins);
        //   return $this->db->delete("instructor");
        // }
    }//CIERRE DE LA CLASE
?>
