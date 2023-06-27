<?php
class Usuario extends CI_Model
{
  function __construct()
  {
  }
  function obtenerPorEmailPassword($email_usu,$password_usu){
    $this->db->where("email_usu",$email_usu);
    $this->db->where("password_usu",$password_usu);
    $usuario=$this->db->get("usuario");
    if ($usuario->num_rows()>0) {
      return $usuario->row();
    }
    return false;
  }
}
 ?>
