<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}
	//login de Administrador
	public function loginA()
		{
			$this->load->view("loginA");
		}
		public function iniciarSesion()
		{
			$this->load->model("Administrador");
			$email_adm=$this->input->post("email_adm");
		  $password_adm=$this->input->post("password_adm");
		  $administradorConectado=$this->Administrador->obtenerPorEmailPassword($email_adm,$password_adm);
		  	if($administradorConectado){
		    	$this->session->set_userdata("conectado",$administradorConectado);
		    	redirect("Welcome/index");
		    	}else{
		    	redirect("welcome/loginA");
		    	}
					}
		//login de socia
		public function loginS()
			{
				$this->load->view("loginS");
			}
			public function iniciarSesionSocia()
			{
				$this->load->model("Socia");
				$email_soc=$this->input->post("email_soc");
			  $password_soc=$this->input->post("password_soc");
			  $sociaConectado=$this->Socia->obtenerPorEmailPassword($email_soc,$password_soc);
			  	if($sociaConectado){
			    	$this->session->set_userdata("conectado",$sociaConectado);
			    	redirect("envios/nuevo");
			    	}else{
			    	redirect("welcome/loginS");
			    	}
			}
			//login de clientes
			public function loginU()
				{
					$this->load->view("loginU");
				}
				public function iniciarSesionUsuario()
				{
					$this->load->model("Usuario");
					$email_usu=$this->input->post("email_usu");
				  $password_usu=$this->input->post("password_usu");
				  $usuarioConectado=$this->Usuario->obtenerPorEmailPassword($email_usu,$password_usu);
				  	if($usuarioConectado){
				    	$this->session->set_userdata("conectado",$usuarioConectado);
				    	redirect("pedidos/lista");
				    	}else{
				    	redirect("welcome/loginU");
				    	}
				}
	}
