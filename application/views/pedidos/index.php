<style>
  .nuevo{
    margin-top: 18px;
  }
</style>
<!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1 class="text-center">LISTADO DE PEDIDOS</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('pedidos/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar pedidos</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($pedidos): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >ARTICULO</th>
             <th >DESCRPCION</th>
             <th >COLOR</th>
             <th >TAMAÑO</th>
             <th>TELEFONO</th>
             <th>DIRECCION</th>
             <th >ACCIONES</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->articulo_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->descripcion_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->color_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->tamaño_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->telefono_ped; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->direccion_ped; ?>
                  </td>
                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/pedidos/editar/<?php echo $filaTemporal->id_ped ?>" title="Editar pedidos" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/pedidos/eliminar/<?php echo $filaTemporal->id_ped ?>"title="Eliminar pedidos" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>no hay pedidos</h1>
  <?php endif;?>
