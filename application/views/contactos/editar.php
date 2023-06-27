<h1 class="text-center">FORMULARIO PARA CONTACTOS</h1>
<form class="" id="frm_editar_contacto" action=" <?php echo site_url(); ?>/contactos/guardar" method="post">
    <div class="row">
      <input type="text" name="id_con" id="con" class="form-control" value="<?php echo $contactoEditar->id_con; ?>">
      <div class="col-md-4">
        <label for="">NOMBRE: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="text"
        placeholder="Ingrese su nombre"
        required
        class="form-control"
        name="nombre_con" value="" id="nombre_con">
      </div>
      <div class="col-md-4">
          <label for="">APELLIDO: <span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese su apellido"
          required
          class="form-control"
          name="apellido_con" value="" id="apellido_con">
      </div>
      <div class="col-md-4">
        <label for="">Email: <span class="obligatorio">(obligatorio)</span> </label>
        <br>
        <input type="email"
        placeholder="Ingrese su correo electronico"
        required
        class="form-control"
        name="correo_con" value="" id="correo_con">
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
        name="telefono_con" value="" id="telefono_con">
      </div>
      <div class="col-md-4">
          <label for="">MENSAJES:<span class="obligatorio">(obligatorio)</span> </label>
          <br>
          <input type="text"
          placeholder="Ingrese mensaje de texto"
          required
          class="form-control"
          name="mensajes_con" value="" id="mensajes_con">
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
            <a href=" <?php echo site_url(); ?>/contactos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<script type="text/javascript">
  $("#frm_editar_contacto").validate({
    rules:{
        nombre_con:{
          required:true,
          minlength:5,
          maxlength:100,
          letras:true
        },
        apellido_con:{
          required:true,
          minlength:3,
          maxlength:50,
          letras:true
        },
        correo_con:{
          required:true,
          minlength:5,
          maxlength:250,
          email:true
        },
        telefono_con:{
          required:true,
          minlength:10,
          maxlength:10,
          digits:true
        },
        mensajes_con:{
          required:true,
          minlength:5,
          maxlength:250,
          letras:true
        }
    },
    messages:{
      nombre_con:{
        required:"Por favor ingrese su Nombre",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombre incorrecto"
      },
      apellido_con:{
        required:"Por favor ingresa su apellido",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Apellido incorrecto"
      },
      correo_con:{
        required:"Por favor ingresa correo",
        minlength:"El correo debe tener al menos 3 caracteres",
        maxlength:"Correo incorrecto"
      },
      telefono_con:{
        required:"Por favor Ingrese el numero de telefono",
        minlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        maxlength:"Nro. de telefono incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      mensajes_con:{
        required:"Por favor ingresa su mensaje de texto",
        minlength:"El mensaje debe tener al menos 3 caracteres",
        maxlength:"Mensajes de texto incorrecto"
      }
    }
  });
</script>
