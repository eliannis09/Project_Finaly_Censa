<?php
//include_once "Controlador/registro.php"
?>

<?php include "Layout/Layout.php" ?>

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
  <!-- Button trigger modal -->
<div class = "col text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  LISTAR REGISTRO 
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <table class="table table-dark table-striped-columns">
	  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Edad</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>


    </tr>
  </thead>

<?php
include_once "Controlador/conexion.php";
$conexion = new Conexion();
$conexion = $conexion->conectar();
if ($conexion){
  $sql = "SELECT * FROM registropersonas";
  $consulta = $conexion-> prepare($sql);
  $consulta->execute();
  $i = 0;
  while($fila=$consulta -> fetch(PDO::FETCH_ASSOC )){
   $i +=1; 
  
?>  

  
  <tbody>
    <tr>
      <th scope="row"><?php $i?></th>
	 
	  <td><?php echo $fila["Nombre"]; ?></td>
	  <td><?php echo $fila["Apellido"]; ?></td>
	  <td><?php echo $fila["Edad"]; ?></td>
	  <td><?php echo $fila["Correo"]; ?></td>
	  <td><?php echo $fila["Telefono"]; ?></td>
	  <td><a href="Update.php" type="button" class="btn btn_success">Editar</a><td>
	  <td></td>
    
     
    </tr>
    
  </tbody>
  <?php
  }}
  else {
    echo"Error al conectar a la base de datos.";
  }

  ?>
</table>
      
  </div>
 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal genérico -->
<div class="modal fade" id="mensajeModal" tabindex="-1" aria-labelledby="mensajeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mensajeModalLabel">Resultado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" id="mensajeTexto">
        <!-- Aquí va el mensaje dinámico -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
     <script src="js/modal.js"></script>



    </body>
</html>