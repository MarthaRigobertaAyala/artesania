<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ARTESANIAS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/css/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/jvectormap/jquery-jvectormap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/owl-carousel-2/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/vendors/owl-carousel-2/owl.theme.default.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('plantilla/assets/css/style.css');?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('plantilla/assets/imagenes/favicon.png'); ?>" />
    <!-- Importacion jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- Importacion de jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
       jQuery.validator.addMethod("letras", function(value, element) {
         //return this.optional(element) || /^[a-z]+$/i.test(value);
         return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáéíñóú ]*$/.test(value);

       }, "Este campo solo acepta letras");
     </script>
     <!-- importacion toastr js-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <!-- importacion toastr css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a href=" <?php echo site_url(); ?>"> <h3>ARTESANIA</h3> </a>

      </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img src=" <?php echo base_url(); ?>/assets/imagenes/fotoface.jpg "  width="30px" height="30px" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <a href="https://www.facebook.com/wilson.porrasatiaja"><h5 class="mb-0 font-weight-normal">Wilson Porras</h5></a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
          <span class="nav-link">CONTENIDO</span>
        </li>
       <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/subcarpetas/productos">BISUTERIAS</a></li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-account-check"></i>
              </span>
              <span class="menu-title">CLIENTES</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/clientes/nuevo">Nuevo</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/clientes/index">Consulta</a></li>
              </ul>
            </div>
          </li>
          <!-- PRODUCTOS-->
            <li class="nav-item menu-items">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                  <i class="mdi mdi-magnify"></i>
                </span>
                <span class="menu-title">PRODUCTOS</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/productos/nuevo">Nuevo</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/productos/index">Consulta</a></li>
                </ul>
              </div>
            </li>
          <!-- contactos-->
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-phone-log"></i>
              </span>
              <span class="menu-title">CONTACTOS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/contactos/nuevo">Nuevo</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/contactos/index">Consulta</a></li>
              </ul>
            </div>
          </li>
          <!-- Pedidos-->
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-check-circle"></i>
              </span>
              <span class="menu-title">PEDIDOS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/pedidos/nuevo">Nuevo</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/pedidos/index">Consulta</a></li>
              </ul>
            </div>
          </li>
          <!-- envios -->
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">ENVIOS</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/envios/nuevo">Nuevo</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/envios/index">Consulta</a></li>
              </ul>
            </div>
          </li>
          <!-- ubicaciones-->
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-map-marker-multiple"></i>
              </span>
              <span class="menu-title">UBICACION</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/ubicaciones/nuevo">Nuevo</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url(); ?>/ubicaciones/index">Consulta</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
               <div class="navbar-nav w-100">
                 <h3 style="color: SteelBlue" ></h3>
               </div>
             </ul>
           <ul class="navbar-nav w-100">
             <div class="navbar-nav w-100">
                <a class="nav-link" href="<?php echo site_url(); ?>/Welcome/index">Bienvenidos a "SUMAK LLANKAY"</a>
              </div>
            </ul>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item ">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img src=" <?php echo base_url(); ?>/assets/imagenes/fotoma.png "  width="30px" height="30px" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Martha Ayala</p>
                  </div>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
    <nav class="navbar navbar-inverse">
    <div style="background-color: #F57F17;" class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="color:black" class="navbar-brand" href="<?php echo site_url(); ?>"> <strong>ARTESANIA INDIGENA</strong></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a style="color:black" href="<?php echo site_url(); ?>/subcarpetas/productos">PRODUCTOS ARTESANALES </a></li>
          <li class="dropdown">
            <a style="color:white" href="#" class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Cliente</strong><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/clientes/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/clientes/index">Consulta</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Productos</strong><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/productos/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/productos/index">Consulta</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Pedidos</strong> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/pedidos/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/pedidos/index">Consulta</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Contacto</strong> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/contactos/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/contactos/index">Consulta</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Ubicaciones</strong> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/ubicaciones/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/ubicaciones/index">Consulta</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <strong>Form Envio</strong> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url(); ?>/envios/nuevo">Nuevo</a></li>
              <li><a href="<?php echo site_url(); ?>/envios/index">Consulta</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
