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
