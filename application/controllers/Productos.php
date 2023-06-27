<?php
  class Productos extends CI_Controller
  {
    function __construct()
    {
      parent::__construct();
      $this->load->model('Producto');
        if (!$this->session->userdata("conectado")){
        redirect("welcome/loginA");
        }
    }
    public function index(){
      $data['productos']=$this->Producto->obtenerTodos();

      $this->load->view('header');
      $this->load->view('productos/index',$data);
      $this->load->view('footer');
  }
    public function nuevo(){
      $this->load->view('header');
      $this->load->view('productos/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
      $datosNuevoProducto=array(
        "nombre_productos_pro"=>$this->input->post('nombre_productos_pro'),
        "cantidad_produtos_pro"=>$this->input->post('cantidad_produtos_pro'),
        "precio_pro"=>$this->input->post('precio_pro')
      );
      if($this->Producto->insertar($datosNuevoProducto)){
          //con redirect si es true vuelve al formulario despues de insertar datos
          $this->session->set_flashdata("confirmacion","Producto guardado exitosamente");
      }else {
          $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
      }
        redirect('productos/index');
  }
  //funcion para eliminar instructores
  //$id_ins variable de la b.dd
  public function eliminar($id_pro)
  {
    // echo $id_ins;
    if ($this->Producto->borrar($id_pro)) {
      $this->session->set_flashdata("confirmacion","Producto eliminado exitosamente");
        }else{
          $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
        }
          redirect('productos/index');
      }
  //RENDERIZAR VISTA EDITAR CON EL Instructor
  public function editar($id_pro)
  {
    $data["productoEditar"]=$this->Producto->obtenerPorId($id_pro);
    $this->load->view('header');
    $this->load->view('productos/editar',$data);
    $this->load->view('footer');
  }
  // procesode actualizacion
    public function procesarActualizacion() {
    $datosEditados = array(
      "nombre_productos_pro"=>$this->input->post('nombre_productos_pro'),
      "cantidad_produtos_pro"=>$this->input->post('cantidad_produtos_pro'),
      "precio_pro"=>$this->input->post('precio_pro')
    );

    $id_pro = $this->input->post('id_pro');
    if ($this->Producto->actualizar($id_pro, $datosEditados)) {
        redirect("productos/index");
    } else {
        echo "ERROR AL ACTUALIZAR :(";
    }
  }
  }//cierre de la clase
  ?>
