<?php 
$client = ClientData::getById($_GET["client_id"]);
?>
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
       letras = " �����abcdefghijklmn�opqrstuvwxyz " ;
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


            <h2>EDITAR CLIENTE</h2>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-ticket"></i> Editar Cliente
                </div>
                <div class="panel-body ">
<form class="form-horizontal" role="form" method="post" action="index.php?action=updateclient">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <input onkeypress= "return soloLetras(event)" type="text" name="name" required value="<?php echo $client->name; ?>" class="form-control" id="inputEmail1" placeholder="Nombre" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido</label>
    <div class="col-lg-10">
      <input onkeypress= "return soloLetras(event)" type="text" name="lastname" value="<?php echo $client->lastname; ?>" required class="form-control" id="inputEmail1" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-lg-10">
      <input onkeypress= "return solonumeros(event)" type="text" name="phone" value="<?php echo $client->phone; ?>" class="form-control" id="inputEmail1" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-10">
      <input type="text" name="address" value="<?php echo $client->address; ?>" class="form-control" id="inputEmail1" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo Electronico</label>
    <div class="col-lg-10">
      <input type="email" name="email" required value="<?php echo $client->email; ?>" class="form-control" id="inputEmail1" placeholder="Correo Electronico">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-lg-10">
      <input type="password" name="password"  class="form-control" id="inputPassword1" placeholder="Contrase&ntilde;a">
      <p class="text-warning">Al dejar este campo en blanco no se modificara la contrase&ntilde;a actual.</p>
    </div>
  </div>



  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $client->id; ?>">
      <button type="submit" class="btn btn-block btn-success">Actualizar Cliente</button>
    </div>
  </div>
</form>                  
                </div>
              </div>
            </div>

          </div>

<br><br>