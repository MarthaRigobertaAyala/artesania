<?php
class Clientes extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Cliente');
      if (!$this->session->userdata("conectado")){
      redirect("welcome/loginA");
      }
  }
  public function index(){
    $data['clientes']=$this->Cliente->obtenerTodos();

    $this->load->view('header');
    $this->load->view('clientes/index',$data);
      $this->load->view('footer');
  }
  public function nuevo(){
    $this->load->view('header');
    $this->load->view('clientes/nuevo');
    $this->load->view('footer');
  }
  public function guardar(){
    $datosNuevoCliente=array(
      "cedula_cli"=>$this->input->post('cedula_cli'),
      "primer_nombre_cli"=>$this->input->post('primer_nombre_cli'),
      "primer_apellido_cli"=>$this->input->post('primer_apellido_cli'),
      "telefono_cli"=>$this->input->post('telefono_cli'),
      "estado_civil_cli"=>$this->input->post('estado_civil_cli'),
      "correo_cli"=>$this->input->post('correo_cli'),
      "direccion_cli"=>$this->input->post('direccion_cli'),
    );
    if($this->Cliente->insertar($datosNuevoCliente)){
        //con redirect si es true vuelve al formulario despues de insertar datos
        $this->session->set_flashdata("confirmacion","Cliente guardado exitosamente");
    }else {
        $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
    }
      redirect('clientes/index');
}
//funcion para eliminar instructores
//$id_ins variable de la b.dd
public function eliminar($id_cli)
{
  // echo $id_ins;
  if ($this->Cliente->borrar($id_cli))
   {
    $this->session->set_flashdata("confirmacion","Cliente eliminado exitosamente");
      }else{
        $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
      }
        redirect('clientes/index');
    }
//RENDERIZAR VISTA EDITAR CON EL Instructor
public function editar($id_cli)
{
  $data["clienteEditar"]=$this->Cliente->obtenerPorId($id_cli);
  $this->load->view('header');
  $this->load->view('clientes/editar',$data);
  $this->load->view('footer');
}
// procesode actualizacion
  public function procesarActualizacion() {
  $datosEditados = array(
    "cedula_cli"=>$this->input->post('cedula_cli'),
    "primer_nombre_cli"=>$this->input->post('primer_nombre_cli'),
    "primer_apellido_cli"=>$this->input->post('primer_apellido_cli'),
    "telefono_cli"=>$this->input->post('telefono_cli'),
    "estado_civil_cli"=>$this->input->post('estado_civil_cli'),
    "correo_cli"=>$this->input->post('correo_cli'),
    "direccion_cli"=>$this->input->post('direccion_cli'),
  );

  $id_cli = $this->input->post('id_cli');
  if ($this->Cliente->actualizar($id_cli, $datosEditados)) {
      $this->session->set_flashdata("confirmacion","Cliente actualizado exitosamente");
  } else {
      $this->session->set_flashdata("error","Error al editar intenten nuevamente");
  }
  redirect("clientes/index");
}

}//cierre de la clase

?>
