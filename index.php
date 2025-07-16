<?php
//include_once "Controlador/registro.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Esto e un viru manito</title>
    <meta charset="utf-8">
    <meta name="title" content="Titulo de la WEB"> 
    <meta name="description" content="Descripcion de la WEB">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script> src="script.js"</script>
        <script type="text/javascrip">
            /* Código */
        </script>
  </head>
  <body>
    <img src="images/firefox-icon.png" alt="Registro de pagina">
    <form class="row g-3" method="POST" action="Controlador/registro.php">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Id</label>

    <select id="inputState" class="form-select">
        <option>Selecciona el Documento </option>
        <option>PPT </option>
        <option>Tarjeta de Identidad </option>
        <option>Cedula de Extranjeria </option>
        <option>Cedula de Ciudadania </option>

    </select>

  </div>
  <form name="Forregist" method="post" action="Controlador/registro.php">
				<!-- to error: add class "has-danger" -->

				<div class="form-group">
				    	<label for="exampleInputEmail1" >Nombres </label>
					<input type="Text" class="form-control form-control-sm"  aria-describedby="emailHelp" id="Usuario" name="Nombre">
				</div>
                <div class="form-group">
				    	<label for="exampleInputEmail1" >Apellido </label>
					<input type="Text" class="form-control form-control-sm"  aria-describedby="emailHelp" id="Usuario" name="Apellido">
				</div>
				<label for="exampleInputEmail1" >Tipo de Documento </label>
				<select class="form-select" aria-label="Default select example"name="T_documento">
 					 <option selected>Cedula de Ciudadania</option>
 					 <option value="Cedula de Extrangeria">Cedula de Extrangeria</option>
 					 <option value="Tarjeta de identidad">Tarjeta de identidad</option>
 					 <option value="Pasaporte">Pasaporte</option>
				</select>
				<div class="form-group">
				    	<label for="exampleInputEmail1" >No Documento</label>
					<input type="text" class="form-control form-control-sm"  aria-describedby="emailHelp" id="Usuario" name="Documento">
				</div>
					
			    <div class="form-group">
					<label for="exampleInputEmail1" >Correo electrónico</label>
					<input type="email" class="form-control form-control-sm"  aria-describedby="emailHelp" id="Correo" name="Correo">
					
				</div>
				 <div class="form-group" style="margin-top:10px;">
				      <label>Edad</label>
                     <input class="expire" type="text" name="Edad">
				 </div>
				 
				<div class="form-group">
					<label for="exampleInputPassword1" >Telefono</label>
					<input type="text" class="form-control form-control-sm" id="exampleInputPassword1" id="telefono" name="Telefono">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Registrarse</button>
				
				<div class="sign-up">
					¿Ya tienes cuenta? <a href="Index.php">Iniciar sesión</a>
				</div>
			</form>
  </body>
</html>