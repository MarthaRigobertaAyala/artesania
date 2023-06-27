<?php
class Administrador extends CI_Model
{
  function __construct()
  {
  }
  function obtenerPorEmailPassword($email_adm,$password_adm){
    $this->db->where("email_adm",$email_adm);
    $this->db->where("password_adm",$password_adm);
    $administrador=$this->db->get("administrador");
    if ($administrador->num_rows()>0) {
      return $administrador->row();
    }
    return false;
  }
}
 ?>
