<?php
  class Producto extends CI_Model
  {
    function __construct()
    {
      parent::__construct();
    }
    //funcion para insertar un instructot
    function insertar($datos){
      //ACTIVE_RECORD > en CodeIgniter
      return $this->db->insert("producto",$datos);
      //Inseccion sQL
    }
    //FUNCION PARA CONSULTAR INSTRUCTORES LINEAS DE CODIGOS NUEVOS
    function obtenerTodos(){
      $listadoproductos=$this->db->get("producto");
      //VALIDAR PARA QUE NO DE ERRORES
      //SIEMPRE VALIDAR CON UN IF PARA QUE NO HAYA ERRORES
      if($listadoproductos->num_rows()>0) { // SI HAY DATOS
        return $listadoproductos->result();
      }else { // NO HAY DATOS
        return false;
      }
    }
    //BORRAR IPEDIDOS
    //"id_ins" de la b.dd
    //$id_ins del formulario
    function borrar($id_pro)
    {
      //delete from instructor where id_ins=1 // pero puede hacerse sql injection
      $this->db->where("id_pro",$id_pro);
      if ($this->db->delete("producto")){
        return true;
      } else {
        return false;
      }
    }
    //FUNCION PARA CONSULTAR PEDIDOS ESPECIFICOS
    function obtenerPorId($id_pro){
      $this->db->where("id_pro",$id_pro);
      $producto=$this->db->get("producto");
      if($producto->num_rows()>0){
        return $producto->row();
      }
      return false;
    }
    //FUNCION PARA ACTUALIZAR UN PEDIDO
    function actualizar($id_pro, $datosEditados)
    {
      $this->db->where("id_pro",$id_pro);
      return $this->db->update('producto', $datosEditados);
    }
}//CIERRE DE LA CLASE
?>
