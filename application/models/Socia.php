<?php
class Socia extends CI_Model
{
  function __construct()
  {
  }
  function obtenerPorEmailPassword($email_soc,$password_soc){
    $this->db->where("email_soc",$email_soc);
    $this->db->where("password_soc",$password_soc);
    $socia=$this->db->get("socia");
    if ($socia->num_rows()>0) {
      return $socia->row();
    }
    return false;
  }
}
 ?>
