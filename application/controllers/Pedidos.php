
<?php
    class Pedidos extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //cargar modelo
            $this->load->model('Pedido');
            if (!$this->session->userdata("conectado")){
            redirect("welcome/loginU");
            }
        }
        // FUNCION QUE RENDEREIZA LA VISTA INDEX
        public function index(){
            //data c va  con cualquier nombre
            $data['pedidos']=$this->Pedido->obtenerTodos();

            $this->load->view('header');
            $this->load->view('pedidos/index',$data);
            $this->load->view('footer');
        }
        // FUNCION QUE RENDEREIZA LA VISTA INDEX
        public function nuevo(){
            $this->load->view('header');
            $this->load->view('pedidos/nuevo');
            $this->load->view('footer');
        }
        //GET ES INSEGURO  MIENTRAS QUE POST ES MAS SEGURO
        public function guardar(){
            $datosNuevoPedido=array(
                "articulo_ped"=>$this->input->post('articulo_ped'),
                "descripcion_ped"=>$this->input->post('descripcion_ped'),
                "color_ped"=>$this->input->post('color_ped'),
                "tamaño_ped"=>$this->input->post('tamaño_ped'),
                "telefono_ped"=>$this->input->post('telefono_ped'),
                "direccion_ped"=>$this->input->post('direccion_ped')
            );
            if($this->Pedido->insertar($datosNuevoPedido)){
                //con redirect si es true vuelve al formulario despues de insertar datos
                $this->session->set_flashdata("confirmacion","Pedido guardado exitosamente");
            }else {
                $this->session->set_flashdata("error","Error al guardar intenten nuevamente");
            }
              redirect('pedidos/index');
        }
        //funcion para eliminar instructores
        //$id_ins variable de la b.dd
        public function eliminar($id_ped)
        {
          // echo $id_ins;
          if ($this->Pedido->borrar($id_ped)) {
            $this->session->set_flashdata("confirmacion","Pedido eliminado exitosamente");
              }else{
                $this->session->set_flashdata("error","Error al eliminar intenten nuevamente");
              }
                redirect('pedidos/index');
            }
        //RENDERIZAR VISTA EDITAR CON EL Instructor
        public function editar($id_ped)
        {
          $data["pedidoEditar"]=$this->Pedido->obtenerPorId($id_ped);
          $this->load->view('header');
          $this->load->view('pedidos/editar',$data);
          $this->load->view('footer');
        }
        // procesode actualizacion
          public function procesarActualizacion() {
          $datosEditados = array(
            "articulo_ped"=>$this->input->post('articulo_ped'),
            "descripcion_ped"=>$this->input->post('descripcion_ped'),
            "color_ped"=>$this->input->post('color_ped'),
            "tamaño_ped"=>$this->input->post('tamaño_ped'),
            "telefono_ped"=>$this->input->post('telefono_ped'),
            "direccion_ped"=>$this->input->post('direccion_ped')
          );
          $id_ped = $this->input->post('id_ped');
          if ($this->Pedido->actualizar($id_ped, $datosEditados)) {
            $this->session->set_flashdata("confirmacion","Pedidos actualizado exitosamente");
        } else {
            $this->session->set_flashdata("error","Error al editar intenten nuevamente");
        }
        redirect("pedidos/index");
      }
      }//cierre de la clase
      ?>
