<?php
class Envios extends CI_Controller

  function __construct()
  {
    parent::__construct();
    $this->load->model('Envio');
      if (!$this->session->userdata("conectado")){
      redirect("welcome/loginS");
      }
  }
  public function index(){
    $data['envios']=$this->Envio->obtenerTodos();

    $this->load->view('header');
    $this->load->view('envios/index',$data);
    $this->load->view('footer');
  }
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('envios/nuevo');
    $this->load->view('footer');
  }
  public function guardar(){
    $datosNuevoEnvio=array(
      "cedula_env"=>$this->input->post('cedula_env'),
      "apellido_env"=>$this->input->post('apellido_env'),
      "nombre_env"=>$this->input->post('nombre_env'),
      "direccion_env"=>$this->input->post('direccion_env'),
      "telefono_env"=>$this->input->post('telefono_env'),
      "fecha_env"=>$this->input->post('fecha_env'),
    );
    if($this->Envio->insertar($datosNuevoEnvio)){
        //con redirect si es true vuelve al formulario despues de insertar datos
        $this->session->set_flashdata("confirmacion","Envios guardado exitosamente");
    }else {
        $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
    }
      redirect('envios/index');
}
//funcion para eliminar instructores
//$id_ins variable de la b.dd
public function eliminar($id_env)
{
  // echo $id_ins;
  if ($this->Envio->borrar($id_env)) {
    $this->session->set_flashdata("confirmacion","Envio eliminado exitosamente");
      }else{
        $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
      }
        redirect('envios/index');
    }
//RENDERIZAR VISTA EDITAR CON EL Instructor
public function editar($id_env)
{
  $data["envioEditar"]=$this->Envio->obtenerPorId($id_env);
  $this->load->view('header');
  $this->load->view('envios/editar',$data);
  $this->load->view('footer');
}
// procesode actualizacion
  public function procesarActualizacion() {
  $datosEditados = array(
    "cedula_env"=>$this->input->post('cedula_env'),
    "apellido_env"=>$this->input->post('apellido_env'),
    "nombre_env"=>$this->input->post('nombre_env'),
    "direccion_env"=>$this->input->post('direccion_env'),
    "telefono_env"=>$this->input->post('telefono_env'),
    "fecha_env"=>$this->input->post('fecha_env'),
  );
  $id_env = $this->input->post('id_env');
  if ($this->Envio->actualizar($id_env, $datosEditados)) {
    $this->session->set_flashdata("confirmacion","Envio actualizado exitosamente");
} else {
    $this->session->set_flashdata("error","Error al editar intenten nuevamente");
}
redirect("envios/index");
}
}//cierre de la clase
?>
