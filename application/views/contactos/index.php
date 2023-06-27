<style>
  .nuevo{
    margin-top: 18px;
  }
</style><!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1  class="text-center">LISTADO DE CONTACTOS</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('contactos/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar Contacto</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($contactos): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >NOMBRE</th>
             <th >APELLIDO</th>
             <th>EMAIL</th>
             <th >TELEFONO</th>
             <th >MENSAJES</th>
             <th >ACCIONES</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($contactos
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_con; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->nombre_con; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->apellido_con; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->correo_con; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->telefono_con; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->mensajes_con; ?>
                  </td>

                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/contactos/editar/<?php echo $filaTemporal->id_con ?>" title="Editar contacto" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/contactos/eliminar/<?php echo $filaTemporal->id_con ?>"title="Eliminar contacto" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>NO HAY CONTACTOS</h1>
  <?php endif;?>
