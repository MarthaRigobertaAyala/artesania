<!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1  class="text-center">UBICACION</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('ubicaciones/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar Ubicacion</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($ubicaciones): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >PAIS</th>
             <th >PROVINCIA</th>
             <th >CANTON</th>
             <th >CIUDAD</th>
             <th >CALLE</th>
             <th>TELEFONO</th>
             <th>ACCION</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($ubicaciones
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->pais_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->provincia_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->canton_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->ciudad_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->calle_ubi; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->telefono_ubi; ?>
                  </td>

                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/ubicaciones/editar/<?php echo $filaTemporal->id_ubi ?>" title="Editar ubicacion" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/ubicaciones/eliminar/<?php echo $filaTemporal->id_ubi ?>"title="Eliminar ubicacion" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                    </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>NO EXISTE UBICACION</h1>
  <?php endif;?>
