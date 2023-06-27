<h1 class="text-center">FORMULARIO PARA PRODUCTOS</h1>
<form class="" id="frm_editar_producto" action="<?php echo site_url('productos/procesarActualizacion') ?>"  method="post">
    <div class="row">
      <input type="text" name="id_pro" id="pro" class="form-control" value="<?php echo $productoEditar->id_pro; ?>">
      <div class="col-md-6">
        <label for="nombre_productos_pro" class="form-label">PRODUCTOS:</label>
        <select required id="nombre_productos_pro" class="form-control" name="nombre_productos_pro">
        <option value="">Seleccione el producto:</option>
        <option value="collares">Collares</option>
        <option value="Aretes">Aretes</option>
        <option value="Pulseras">Pulseras</option>
        <option value="Binchas">Binchas</option>
        <option value="Imperdibles">Imperdibles</option>
        <option value="Anillos">Anillos</option>
        <option value="Estuches de Telefonos">Estuches de Telefonos</option>
        <option value="Llaveros">Llaveros</option>
        <option value="Dije">Dije</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="cantidad_produtos_pro" class="form-label">CANTIDAD:</label>
        <select required id="cantidad_produtos_pro" class="form-control" name="cantidad_produtos_pro">
        <option value="">Seleccione la cantidad:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
      </div>
      <div class="col-md-4">
        <label for="">Precio: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese el precio"
        required
        class="form-control"
        name="precio_pro" value="" id="precio_pro">
      </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href=" <?php echo site_url(); ?>/productos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
<br>
    <br>
        <center>
        <div class="row">
          <div class="col-md-12">
            <h2> <strong>INVESTIGA NUESTROS PRECIOS Y PRODUCTOS</strong></h2>
            <button type="button" name="button" class="btn btn-info" >
            <a style="color:white" href=" <?php echo site_url(); ?>/subcarpetas/productos "> ⬅️ VER PRODUCTOS</a>
            </button>
          </div>
        </div>
      </center>
</form>
<script type="text/javascript">
  $("#frm_editar_producto").validate({
    rules:{
        nombre_productos_pro:{
         required:true,
       },
        cantidad_produtos_pro:{
          required:true,
        },
       precio_pro:{
         required:true,
         minlength:3,
         maxlength:100,
     }
    },
    messages:{
      nombre_productos_pro:{
          required:"Por favor seleccione un producto",
        },
      cantidad_produtos_pro:{
          required:"Por favor seleccione la cantidad del producto",
        },
        precio_pro:{
          required:"Por favor ingrese le precio",
          minlength:"Desccripcion en incorrecta, ingrese mas de 3 digitos",
          maxlength:"Desccripcion en incorrecta, ingrese menos de 10 digitos"
    }
    }
  });
</script>
