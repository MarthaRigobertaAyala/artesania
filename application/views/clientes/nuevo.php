<h1 class="text-center">FORMULARIO PARA CLIENTES</h1>
<form class="" id="frm_nuevo_cliente" action=" <?php echo site_url(); ?>/clientes/guardar" method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">Cédula: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            required
            min="99999999"
            name="cedula_cli" value="" id="cedula_cli">
      </div>
      <div class="col-md-4">
          <label for="">Primer Nombre: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer nombre"
          required
          class="form-control"
          name="primer_nombre_cli" value="" id="primer_nombre_cli">
      </div>
      <div class="col-md-4">
        <label for="">Primer Apellido:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese el primer apellido"
        required
        class="form-control"
        name="primer_apellido_cli" value="" id="primer_apellido_cli">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <label for="">Teléfono:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="number"
        placeholder="Ingrese el telefono"
        required
        class="form-control"
        name="telefono_cli" value="" id="telefono_cli">
      </div>
      <div class="col-md-4">
          <label for="">Estado civil:<span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese estado civil"
          required
          class="form-control"
          name="estado_civil_cli" value="" id="estado_civil_cli">
      </div>
      <div class="col-md-4">
        <label for="">Email: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="email"
        placeholder="Ingrese su correo electronico"
        required
        class="form-control"
        name="correo_cli" value="" id="correo_cli">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="">Dirección:<span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese la direccion"
        required
        class="form-control"
        name="direccion_cli" value="" id="direccion_cli">
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
            <a href=" <?php echo site_url(); ?>/clientes/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_nuevo_cliente").validate({
    rules:{
        cedula_cli:{
         required:true,
         minlength:10,
         maxlength:10,
         digits:true
       },
        primer_nombre_cli:{
          required:true,
          minlength:5,
          maxlength:100,
          letras:true
        },
        primer_apellido_cli:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        telefono_cli:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        estado_civil_cli:{
          required:true,
          minlength:5,
          maxlength:250,
          letras:true
        },
        correo_cli:{
          required:true,
          minlength:5,
          maxlength:250,
          email:true
        },
        direccion_cli:{
          required:true,
          minlength:5,
          maxlength:250,
          letras:true
        }
    },
    messages:{
    cedula_cli:{
        required:"Por favor Ingrese el numero de cedula",
        minlength:"Cedula incorrecta, ingrese 10 digitos",
        maxlength:"Cedula incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      primer_nombre_cli:{
        required:"Por favor ingrese su Nombre",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombre incorrecto"
      },
      primer_apellido_cli:{
        required:"Por favor ingresa su apellido",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Apellido incorrecto"
      },
      telefono_cli:{
        required:"Por favor Ingrese el numero de telefono",
        minlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        maxlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      estado_civil_cli:{
        required:"Por favor ingresa su estado civil",
        minlength:"El estado civil debe tener al menos 3 caracteres",
        maxlength:"Estado civil incorrecto"
      },
      correo_cli:{
        required:"Por favor ingresa correo",
        minlength:"El correo debe tener al menos 3 caracteres",
        maxlength:"Correo incorrecto"
      },
      direccion_cli:{
        required:"Por favor ingresa tu direccion",
        minlength:"La direccion debe tener al menos 3 caracteres",
        maxlength:"Direccion incorrecto"
      }
    }
  });
</script>
