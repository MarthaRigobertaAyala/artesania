<?php
class Contactos extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Contacto');
      if (!$this->session->userdata("conectado")){
      redirect("welcome/loginS");
      }
  }
  public function index(){
    $data['contactos']=$this->Contacto->obtenerTodos();

    $this->load->view('header');
    $this->load->view('contactos/index',$data);
    $this->load->view('footer');
  }
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('contactos/nuevo');
    $this->load->view('footer');
  }
  public function guardar(){
    $datosNuevoContacto=array(
      "nombre_con"=>$this->input->post('nombre_con'),
      "apellido_con"=>$this->input->post('apellido_con'),
      "correo_con"=>$this->input->post('correo_con'),
      "telefono_con"=>$this->input->post('telefono_con'),
      "mensajes_con"=>$this->input->post('mensajes_con'),
    );
    if($this->Contacto->insertar($datosNuevoContacto)){
        //con redirect si es true vuelve al formulario despues de insertar datos
        $this->session->set_flashdata("confirmacion","Contacto guardado exitosamente");
    }else {
        $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
    }
      redirect('contatos/index');
    }
//funcion para eliminar instructores
//$id_ins variable de la b.dd
public function eliminar($id_con)
{
  // echo $id_ins;
  if ($this->Contacto->borrar($id_con)) {
    $this->session->set_flashdata("confirmacion","Contacto eliminado exitosamente");
      }else{
        $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
      }
        redirect('contatos/index');
    }
//RENDERIZAR VISTA EDITAR CON EL Instructor
public function editar($id_con)
{
  $data["contactoEditar"]=$this->Contacto->obtenerPorId($id_con);
  $this->load->view('header');
  $this->load->view('contactos/editar',$data);
  $this->load->view('footer');
}
// procesode actualizacion
  public function procesarActualizacion() {
  $datosEditados = array(
    "nombre_con"=>$this->input->post('nombre_con'),
    "apellido_con"=>$this->input->post('apellido_con'),
    "correo_con"=>$this->input->post('correo_con'),
    "telefono_con"=>$this->input->post('telefono_con'),
    "mensajes_con"=>$this->input->post('mensajes_con'),
  );
  $id_con = $this->input->post('id_con');
  if ($this->Contacto->actualizar($id_con, $datosEditados)) {
    $this->session->set_flashdata("confirmacion","Contacto actualizado exitosamente");
} else {
    $this->session->set_flashdata("error","Error al editar intenten nuevamente");
}
redirect("contatos/index");
}
}//cierre de la clase
?>
