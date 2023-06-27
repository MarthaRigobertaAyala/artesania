<h1 class="text-center">FORMULARIO DE UBICACION</h1>
<form class="" id="frm_nuevo_ubicacion" action=" <?php echo site_url(); ?>/ubicaciones/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
      <label for="pais_ubi" class="form-label">Pais: <span class="obligatorio"> (obligatorio)</span> </label>
      <select required id="pais_ubi" class="form-control" name="pais_ubi">
      <option value="">Seleccione el pais:</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Peru">Peru</option>
      <option value="Colombia">Colombia</option>
      <option value="Argentina">Argentina</option>
      <option value="Paraguay">Paraguay</option>
      </select>
      </div>
      <div class="col-md-4">
          <label for="">Provincia: <span class="obligatorio"> (obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese la provincia"
          required
          class="form-control"
          name="provincia_ubi" value="" id="provincia_ubi">
      </div>
      <div class="col-md-4">
        <label for="">Canton:<span class="obligatorio"> (obligatorio)</span></label>
        <br>
        <input type="text"
        placeholder="Ingrese el canton"
        required
        class="form-control"
        name="canton_ubi" value="" id="canton_ubi">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <label for="">Ciudad:<span class="obligatorio"> (obligatorio)</span></label>
        <br>
        <input type="text"
        placeholder="Ingrese la ciudad"
        required
        class="form-control"
        name="ciudad_ubi" value="" id="ciudad_ubi">
      </div>
      <div class="col-md-4">
          <label for="">Calle:<span class="obligatorio"> (obligatorio)</span></label>
          <br>
          <input type="text"
          placeholder="Ingrese la calle"
          required
          class="form-control"
          name="calle_ubi" value="" id="calle_ubi">
      </div>
      <div class="col-md-4">
        <label for="">telefono accesible para a entrega:<span class="obligatorio"> (obligatorio)</span></label>
        <br>
        <input type="number"
        class="form-control"
        placeholder="Ingrese su numero telefonico"
        required
        name="telefono_ubi" value="" id="telefono_ubi">
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
            <a href=" <?php echo site_url(); ?>/ubicaciones/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_nuevo_ubicacion").validate({
    rules:{
       pais_ubi:{
          required:true,
          //digits: true
        },
        provincia_ubi:{
          required:true,
          minlength:5,
          maxlength:100,
          letras:true
        },
        canton_ubi:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        ciudad_ubi:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        calle_ubi:{
          required:true,
          minlength:5,
          maxlength:250,
          letras:true
        },
        telefono_ubi:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        }
    },
    messages:{
      pais_ubi:{
          required:"Por favor seleccione el país",
        },
      provincia_ubi:{
        required:"Por favor ingrese la provincia",
        minlength:"Provincia incorrecta, ingrese mas de 5 digitos",
        maxlength:"Provincia incorrecta, ingrese menos de 100 digitos"
      },
      canton_ubi:{
        required:"Por favor ingrese el cantón",
        minlength:"color incorrecto, ingrese más de 3 dígitos",
        maxlength:"color incorrecto, ingrese menos de 50 dígitos"
      },
      ciudad_ubi_ped:{
        required:"Por favor ingrese el cantón",
        minlength:"Cantón incorrecta, ingrese más de 5 dígitos",
        maxlength:"Cantón incorrecta, ingrese menos de 250 dígitos"
      },
      calle_ubi:{
        required:"Por favor ingrese la direccion de la calle",
        minlength:"Calle incorrecta, ingrese más de 5 dígitos",
        maxlength:"Calle incorrecta, ingrese menos de 250 dígitos"
      },
      telefono_ubi:{
        required:"Por favor ingrese el número de teléfono",
        minlength:"Teléfono incorrecto, ingrese 10 dígitos",
        maxlength:"Teléfono incorrecto, ingrese 10 dígitos",
        digits:"Este campo solo acepta números",
        number:"Este campo solo acepta números"
      }
    }
  });
</script>
