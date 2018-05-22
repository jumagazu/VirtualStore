        <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
 <!-- Button trigger modal -->



 <!-- Validaciones de los campos para el formulario de registo de usuario para el ADMIN -->
 <!-- se valida que el nombre y apellido sean solo letras, sin caracteres especiales y con espacios -->
 <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz " ;
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

     function solonumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>


            <h2>NUEVO CLIENTE</h2>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-ticket"></i> Nuevo Cliente
                </div>
                <div class="panel-body ">
<form class="form-horizontal" role="form" method="post" action="index.php?action=addclient">
  
<div class="form-group">
    
<label for="inputEmail1" class="col-lg-2 control-label" >Nombre</label>
<div class="col-lg-10">
<input type="text" name="name" required class="form-control" id="inputEmail1" placeholder="Nombre" onkeypress= "return soloLetras(event)">
<title="El formato debe coincidir con 3 letras mayúsculas y 4 números."/>
</div>
</div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-lg-10">
      <input type="text" name="lastname" required class="form-control" id="inputEmail1" placeholder="Apellido" onkeypress= "return soloLetras(event)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-lg-10">
      <input type="number" name="phone" class="form-control" id="inputEmail1" placeholder="Telefono" onkeypress= "return solonumeros(event)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-10">
      <input type="text" name="address" class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
    <div class="col-lg-10">
      <input type="email" name="email" required class="form-control" id="inputEmail1" placeholder="Correo Electronico">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-lg-10">
      <input type="password" name="password" required class="form-control" id="inputPassword1" placeholder="Contrase&ntilde;a">
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-block btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>                  
                </div>
              </div>
            </div>

          </div>

<br><br>