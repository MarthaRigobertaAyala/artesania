<h1 class="text-center">FORMULARIO DE PEDIDOS</h1>
<form class="" id="frm_nuevo_pedido" action="<?php echo site_url(); ?>/pedidos/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="articulo_ped" class="form-label">Articulo: <span class="obligatorio"> (obligatorio)</span></label>
          <select required id="articulo_ped" class="form-control" name="articulo_ped">
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
      <div class="col-md-4">
          <label for="">Descripcion:  <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese la descripcion"
          required
          class="form-control"
          name="descripcion_ped" value="" id="descripcion_ped">
      </div>
      <div class="col-md-4">
        <label for="">Color: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese el color"
        required
        class="form-control"
        name="color_ped" value="" id="color_ped">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <label for="tamaño_ped" class="form-label">Tamaño: <span class="obligatorio">obligatorio)</span> </label>
        <select required id="tamaño_ped" class="form-control" name="tamaño_ped">
        <option value="">Seleccione el tamaño del producto:</option>
        <option value="collares">Grande</option>
        <option value="Aretes">Mediano</option>
        <option value="Aretes">Pequeño</option>
        </select>
      </div>
      <div class="col-md-4">
          <label for="">Telefono: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="number"
          placeholder="Ingrese su numero de telefono"
          required
          class="form-control"
          name="telefono_ped" value="" id="telefono_ped">
      </div>
      <div class="col-md-4">
        <label for="">Dirección: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese su direccion"
        required
        class="form-control"
        name="direccion_ped" value="" id="direccion_ped">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href=" <?php echo site_url(); ?>/pedidos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_nuevo_pedido").validate({
    rules:{
       articulo_ped:{
          required:true,
          //digits: true
        },
        descripcion_ped:{
          required:true,
          minlength:5,
          maxlength:100,
          letras:true
        },
        color_ped:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        tamaño_ped:{
          required:true,
        },
        telefono_ped:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        direccion_ped:{
          required:true,
          minlength:5,
          maxlength:250,
          letras:true
        }
    },
    messages:{
      articulo_ped:{
          required:"Por favor seleccione el articulo",
        },
      descripcion_ped:{
        required:"Por favor ponga una descripcion del producto",
        minlength:"Desccripcion en incorrecta, ingrese mas de 5 digitos",
        maxlength:"Desccripcion en incorrecta, ingrese menos de 100 digitos"
      },
      color_ped:{
        required:"Por favor ponga el color del producto",
        minlength:"color incorrecto, ingrese más de 3 dígitos",
        maxlength:"color incorrecto, ingrese menos de 50 dígitos"
      },
      tamaño_ped:{
        required:"Por favor seleccione un tamaño del producto",
      },
      telefono_ped:{
        required:"Por favor ingrese el número de teléfono",
        minlength:"Teléfono incorrecto, ingrese 10 dígitos",
        maxlength:"Teléfono incorrecto, ingrese 10 dígitos",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      },
      direccion_ped:{
        required:"Por favor ingrese la dirección",
        minlength:"Dirección incorrecta, ingrese más de 5 dígitos",
        maxlength:"Dirección incorrecta, ingrese menos de 250 dígitos"
      }
    }
  });
</script>
