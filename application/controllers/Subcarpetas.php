<?php
  class Subcarpetas extends CI_Controller
  {
    public function productos(){
      $this->load->view('header');
      $this->load->view('subcarpetas/productos');
      $this->load->view('footer');
    }
  }
 ?>
