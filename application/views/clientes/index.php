<style>
  .nuevo{
    margin-top: 18px;
  }
</style>
<!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1  class="text-center">LISTADO DE CLIENTES</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('clientes/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar Cliente</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($clientes): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >CEDULA</th>
             <th >PRIMER NOMBRE</th>
             <th >PRIMER APELLIDO</th>
             <th >TELEFONO</th>
             <th >ESTADO CIVIL</th>
             <th>EMAIL</th>
             <th>DIRECCION</th>
             <th >ACCIONES</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->cedula_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->primer_nombre_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->primer_apellido_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->telefono_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->estado_civil_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->correo_cli; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->direccion_cli; ?>
                  </td>
                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/clientes/editar/<?php echo $filaTemporal->id_cli ?>" title="Editar cliente" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli ?>"title="Eliminar cliente" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>NO HAY CLIENTES</h1>
  <?php endif;?>
