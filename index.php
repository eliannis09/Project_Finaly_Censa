<?php include "Layout/Layout.php" ?>
<body>

<!-- Header con menú -->

<header class="d-flex justify-content-between align-items-center px-4 py-3" style="background-color: #1f2937;">
  <h2 class="text-white" style="font-family: 'Segoe Script', cursive;">Belleza & Estilo</h2>
  <nav>
    <a href="#" class="text-white mx-3 text-decoration-none">Inicio</a>
    <a href="#" class="text-white mx-3 text-decoration-none">Servicios</a>
    <a href="#" class="text-white mx-3 text-decoration-none">Contacto</a>
  </nav>
  <a href="Index.php" class="btn btn-outline-light btn-sm">Iniciar sesión</a>
</header>

<!-- Hero con imagen y texto -->
<section class="hero-section text-white d-flex align-items-center justify-content-center" style="
  background-image: url('imagenes/look-girl-model-long-hair-wallpaper-preview.jpg');
  background-size: cover;
  background-position: center;
  height: 100vh;">
  
  <div class="text-center bg-dark bg-opacity-50 p-4 rounded">
    <h1 class="display-4">Somos tu <span style="color: #ff69b4; text-decoration: underline;">belleza</span></h1>
    <p class="lead">Regístrate y disfruta nuestros servicios exclusivos</p>
  </div>
</section>


<!-- Formulario de registro -->
<div class="container my-5">
  <div class="card shadow-sm p-4 mx-auto" style="max-width: 700px;">
    <form method="POST" action="Controlador/registro.php">
      <div class="row mb-3">
        <div class="col">
          <input type="text" class="form-control" name="Nombre" placeholder="Nombre" required>
        </div>
        <div class="col">
          <input type="text" class="form-control" name="Apellido" placeholder="Apellido" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <select name="T_documento" class="form-select" required>
            <option value="" disabled selected>Tipo de Documento</option>
            <option value="Cedula de Ciudadania">Cédula de Ciudadanía</option>
            <option value="Cedula de Extrangeria">Cédula de Extranjería</option>
            <option value="Tarjeta de identidad">Tarjeta de Identidad</option>
            <option value="Pasaporte">Pasaporte</option>
          </select>
        </div>
        <div class="col">
          <input type="text" class="form-control" name="Documento" placeholder="Número de Documento" required>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <input type="email" class="form-control" name="Correo" placeholder="Correo electrónico" required>
        </div>
        <div class="col">
          <input type="number" min="1" class="form-control" name="Edad" placeholder="Edad" required>
        </div>
        <div class="col">
          <input type="tel" class="form-control" name="Telefono" placeholder="Teléfono" required>
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100">Registrarse</button>
      <p class="text-center mt-3">¿Ya tienes cuenta? <a href="Index.php">Iniciar sesión</a></p>
    </form>
  </div>
</div>
<!-- Button trigger modal -->
<div class = "col text-center">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Lista de registro
</button>

<!-- Modal -->
<div class="modal fade col-12 " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
      <th sc-ope="col">Nombre</th>
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
  $sql = "SELECT * FROM `registropersonas`";
  $consulta = $conexion-> prepare($sql);
  $consulta->execute();
  $i = 0;
  while($fila=$consulta -> fetch(PDO::FETCH_ASSOC )){
   $i +=1; 
  
?>  

 
  <tbody>
    <tr>
    <th scope="row"><?php echo $i ?></th>
    <td><?php echo $fila["Nombre"]; ?></td>
	  <td><?php echo $fila["Apellido"]; ?></td>
	  <td><?php echo $fila["Edad"]; ?></td>
	  <td><?php echo $fila["Correo"]; ?></td>
	  <td><?php echo $fila["Telefono"]; ?></td>
	  <td><a href ="Update.php?id=<?php echo $fila ["Id"] ?>" type="button" class="btn btn-success">Editar</a></td>
    <td><a href="delete.php?id=<?= $fila['Id'] ?>" class="btn btn-danger">Eliminar</a></td>
 

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



<!-- Footer pastel -->
<footer class="text-center text-white py-4" style="background-color: #1f2937;">
  <p>Belleza & Estilo. Todos los derechos reservados.</p>
  <p>Contacto: info@bellezaestilo.com | Tel: +57 123 456 7890</p>
  <p>Hecho por: Eliannis Hernandez</p>
</footer>

<style>
  .text-pink {
    color: #FF69B4;
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
