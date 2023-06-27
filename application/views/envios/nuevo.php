<h1 class="text-center">FORMULARIO PARA ENVIO</h1>
<form class="" id="frm_nuevo_envio" action=" <?php echo site_url(); ?>/envios/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            required
            min="99999999"
            name="cedula_env" value="" id="cedula_env">
      </div>
      <div class="col-md-4">
          <label for="">Apellido: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese su apellido"
          required
          class="form-control"
          name="apellido_env" value="" id="apellido_env">
      </div>
      <div class="col-md-4">
        <label for="">Nombre:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese su nombre"
        required
        class="form-control"
        name="nombre_env" value="" id="nombre_env">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <label for="">Dirección:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese la direccion"
        required
        class="form-control"
        name="direccion_env" value="" id="direccion_env">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="number"
        placeholder="Ingrese el telefono"
        required
        class="form-control"
        name="telefono_env" value="" id="telefono_env">
      </div>
      <div class="col-md-4">
        <label for="">Fecha: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese la fecha de envio"
        required
        class="form-control"
        name="fecha_env" value="" id="fecha_env">
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
            <a href=" <?php echo site_url(); ?>/envios/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_nuevo_envio").validate({
    rules:{
        cedula_env:{
         required:true,
         minlength:10,
         maxlength:10,
         digits:true
       },
        apellido_env:{
          required:true,
          minlength:3,
          maxlength:100,
          letras:true
        },
        nombre_env:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        direccion_env:{
          required:true,
          minlength:3,
          maxlength:250,
          letras:true
        },
        telefono_env:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        fecha_env:{
          required:true,
          minlength:3,
          maxlength:250,
          letras:true
        }
    },
    messages:{
    cedula_env:{
        required:"Por favor Ingrese el numero de cedula",
        minlength:"Cedula incorrecta, ingrese 10 digitos",
        maxlength:"Cedula incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      apellido_env:{
        required:"Por favor ingrese su Apellido",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"apellido incorrecto"
      },
      nombre_env:{
        required:"Por favor ingresa su nombre",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombre incorrecto"
      },
      direccion_env:{
        required:"Por favor ingresa tu direccion",
        minlength:"La direccion debe tener al menos 3 caracteres",
        maxlength:"Direccion incorrecto"
      },
      telefono_env:{
        required:"Por favor Ingrese el numero de telefono",
        minlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        maxlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      fecha_env:{
        required:"Por favor ingrese la fecha de envio",
        minlength:"La fecha debe tener al menos 3 caracteres",
        maxlength:"fecha incorre"
      }
    }
  });
</script>
