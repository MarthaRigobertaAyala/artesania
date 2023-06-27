<style>
  .nuevo{
    margin-top: 18px;
  }
</style>
<!--NUEVA LINEA DE COFDIGO PARA MI CODIGO-->
<div class="row">
  <div class="col-md-8">
      <center>
      <h1  class="text-center">LISTADO DE PRODUCTOS</h1>
      </center>
  </div>
  <div class="col-md-4">
      <a href=" <?php echo site_url('productos/nuevo'); ?> " class="btn btn-secundary" >
        <i class="glyphicon glyphicon-plus" > </i>
        Agregar Cliente</a>
  </div>
</div>
<!--FIN-->
<br>
<?php if ($productos): ?>
    <table class="table table-striped
    table-bordered table-hover">
        <thead>
           <tr>
             <th >ID</th>
             <th >PRODUCTO</th>
             <th >CANTIDAD</th>
             <th >PRECIO</th>
             <th >ACCIONES</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($productos
            as $filaTemporal): ?>
              <tr>
                  <td>
                      <?php echo
                      $filaTemporal->id_pro; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->nombre_productos_pro; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->cantidad_produtos_pro; ?>
                  </td>
                  <td>
                      <?php echo
                      $filaTemporal->precio_pro; ?>
                  </td>
                  <td class="text-center">
            <a href="<?php echo site_url(); ?>/productos/editar/<?php echo $filaTemporal->id_pro ?>" title="Editar productos" style="color:orange;"> <i class="mdi mdi-pencil"></i></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo site_url(); ?>/productos/eliminar/<?php echo $filaTemporal->id_pro ?>"title="Eliminar productos" onclick="return confirm('¿Estas seguro de eliminar el registro?');" style="color:red;"> <i class="mdi mdi-close"></i></a>
          </td>
                  </tr>
                <?php endforeach;?>
              </tbody>
        </table>
<?php else: ?>
  <h1>NO EXISTE PRODUCTOS </h1>
  <?php endif;?>
