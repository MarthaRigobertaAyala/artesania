<?php
    class Cliente extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
        }
        function insertar($datos){
            //consultar active record en CodeIgniter a los 2 lados (1 hoja) poner graficos
            //INYECTION SQL 1 HOJA PARA LOS 2 CONSULTAS
            return $this->db->insert("cliente",$datos);
        }
        //FUNCION PARA CONSULTAR INSTRUCTORES
        function obtenerTodos(){
            //segun active record para ser seguro al injection sql
            $listadoCliente=$this->db->get("cliente");
            //en caso ode que se encuetre vacio
            if($listadoCliente->num_rows()>0){
                return $listadoCliente->result();
            }else{
                return false;
            }
        }
        //BORRAR IPEDIDOS
        //"id_ins" de la b.dd
        //$id_ins del formulario
        function borrar($id_cli)
        {
          //delete from instructor where id_ins=1 // pero puede hacerse sql injection
          $this->db->where("id_cli",$id_cli);
          if ($this->db->delete("cliente")){
            return true;
          } else {
            return false;
          }
        }
        //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
        function obtenerPorId($id_cli){
          $this->db->where("id_cli",$id_cli);
          $cliente=$this->db->get("cliente");
          if($cliente->num_rows()>0){
            return $cliente->row();
          }
          return false;
        }
        //FUNCION PARA ACTUALIZAR UN PEDIDO
        function actualizar($id_cli, $datosEditados)
        {
          $this->db->where("id_cli",$id_cli);
          return $this->db->update('cliente', $datosEditados);
        }
    }//CIERRE DE LA CLASE
?>
