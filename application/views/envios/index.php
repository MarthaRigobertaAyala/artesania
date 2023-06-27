<style>
  .nuevo{
    margin-top: 18px;
  }
</style>
<!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1  class="text-center">LISTADO DE ENVIOS</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('envios/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar envios</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($envios): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >CEDULA</th>
             <th >APELLIDO</th>
             <th >NOMBRE</th>
              <th>DIRECCION</th>
             <th >TELEFONO</th>
             <th >FECHA</th>
             <th >ACCIONES</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($envios
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->cedula_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->apellido_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->nombre_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->direccion_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->telefono_env; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->fecha_env; ?>
                  </td>
                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/envios/editar/<?php echo $filaTemporal->id_env ?>" title="Editar envios" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/envios/eliminar/<?php echo $filaTemporal->id_env ?>"title="Eliminar envios" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>NO HAY ENVIOS</h1>
  <?php endif;?>
