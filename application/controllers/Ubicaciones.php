<?php
  class Ubicaciones extends CI_Controller
  {
      function __construct()
      {
        parent::__construct();
        $this->load->model('Ubicacion');
        $this->load->model('Contacto');
          if (!$this->session->userdata("conectado")){
          redirect("welcome/loginU");
          }
      }
      public function index(){
        $data['ubicaciones']=$this->Ubicacion->obtenerTodos();

        $this->load->view('header');
        $this->load->view('ubicaciones/index',$data);
        $this->load->view('footer');
      }
      public function nuevo(){
        $this->load->view('header');
        $this->load->view('ubicaciones/nuevo');
        $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoUbicacion=array(
        "pais_ubi"=>$this->input->post('pais_ubi'),
        "provincia_ubi"=>$this->input->post('provincia_ubi'),
        "canton_ubi"=>$this->input->post('canton_ubi'),
        "ciudad_ubi"=>$this->input->post('ciudad_ubi'),
        "calle_ubi"=>$this->input->post('calle_ubi'),
        "telefono_ubi"=>$this->input->post('telefono_ubi'),
      );

      if ($this->Ubicacion->insertar($datosNuevoUbicacion)) {
        $this->session->set_flashdata("confirmacion","Ubicacion guardado exitosamente");
    }else {
        $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
    }
      redirect('ubicaciones/index');
}
  //funcion para eliminar Clientes
  public function eliminar($id_ubi){
    if ($this->Ubicacion->borrar($id_ubi)) {
      $this->session->set_flashdata("confirmacion","Ubicacion eliminado exitosamente");
  }else {
      $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
  }
    redirect('ubicaciones/index');
}
  //RENDERIZAR VISTA EDITAR CON EL Instructor
  public function editar($id_ubi)
  {
    $data["ubicacionEditar"]=$this->Ubicacion->obtenerPorId($id_ubi);
    $this->load->view('header');
    $this->load->view('ubicaciones/editar',$data);
    $this->load->view('footer');
  }
  // procesode actualizacion
    public function procesarActualizacion() {
    $datosEditados = array(
      "pais_ubi"=>$this->input->post('pais_ubi'),
      "provincia_ubi"=>$this->input->post('provincia_ubi'),
      "canton_ubi"=>$this->input->post('canton_ubi'),
      "ciudad_ubi"=>$this->input->post('ciudad_ubi'),
      "calle_ubi"=>$this->input->post('calle_ubi'),
      "telefono_ubi"=>$this->input->post('telefono_ubi'),
    );
    $id_ped = $this->input->post('id_ubi');
    if ($this->Ubicacion->actualizar($id_ubi, $datosEditados)) {
      $this->session->set_flashdata("confirmacion","Ubicacion actualizado exitosamente");
  }else {
      $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
  }
    redirect('ubicaciones/index');
  }
  }//cierre de la clase
  ?>
