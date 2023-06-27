<?php
  class Ubicacion extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("ubicacion",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoubicaciones=$this->db->get("ubicacion");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoubicaciones->num_rows()>0) { // SI HAY DATOS
        return $listadoubicaciones->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    //BORRAR IPEDIDOS
    //"id_ins" de la b.dd
    //$id_ins del formulario
    function borrar($id_ubi)
    {
      //delete from instructor where id_ins=1 // pero puede hacerse sql injection
      $this->db->where("id_ubi",$id_ubi);
      if ($this->db->delete("ubicacion")){
        return true;
      } else {
        return false;
      }
    }
    //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
    function obtenerPorId($id_ubi){
      $this->db->where("id_ubi",$id_ubi);
      $ubicacion=$this->db->get("ubicacion");
      if($ubicacion->num_rows()>0){
        return $ubicacion->row();
      }
      return false;
    }
    //FUNCION PARA ACTUALIZAR UN PEDIDO
    function actualizar($id_ubi, $datosEditados)
    {
      $this->db->where("id_ubi",$id_ubi);
      return $this->db->update('ubicacion', $datosEditados);
    }
    ?>
