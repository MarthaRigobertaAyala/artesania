<center>
<div class="row" style="background-color: #a9cce3;">
  <h1 class="text-center" >INICIAR SECCION ADMINISTRADOR</h1>
<div class="col-xs-6 col-md-12 text-center" >
  <br>
  <img src="<?php echo base_url(); ?>/assets/imagenes/nuevo.png" width="25%" height="200px" >
  <br>
  <br>
</div>
</div>
<div class="row text-center" style="background-color: #a9cce3;"  >
  <form  action="<?php echo site_url('welcome/iniciarSesion'); ?>" method="post">
    <div class="col-md-12">
      <label for="" >CORREO:</label>
      <input type="email" name="email_adm" value="">
      <label for="" >CONTRASEÑA:</label>
      <input type="password" name="password_adm" value="">
      <button type="submit" name="button">
        Ingresar
      </button>
    </div>
  </form>
  <br>
  <br>
  <br>
    <br>
    <br>
    <br>
  <br>
  <br>
  <br>
  <br>
</div>
</center>
