<?php

if(!isset($_GET['id']) || empty ($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id']; 
// ESTA ES LA VISTA DE LA INTERFAZ DE ACTUALIZAR DATOS

include_once "Controlador/conexion.php";
$con=new Conexion();
$con=$con->conectar(); 

if(!$con) {
    header("Location: index.php?error="."Sin Conexion");
    exit();
}

$sql = "SELECT * FROM `registropersonas` WHERE Id = :id";
$con=$con->prepare($sql);
$con->bindparam(':id', $id);
$con->execute();


//verificar que un valor no lo devuelva vacio 


$registro = $con->fetch(PDO::FETCH_ASSOC);



/*
if($con->RowCount() == 0){
    header("Location: index.php?error="."no Existe El dato ");
    exit();
}
*/
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include_once 'Layout/Layout.php'; ?>
    <div class="container mt-5">
        <!-- Aquí va el contenido de tu página, por ejemplo el formulario de actualización -->
        <h2><?php // echo htmlspecialchars($registro['Id']); ?>  </h2>
        
        <form action="Controlador/UpdateController.php" method="POST" class="container d-flex justify-content-center align-items-center" style="height: 85vh;">
  <div class="col-4">
    <div class="mb-2">
      <input type="text" class="form-control" Value="<?php echo htmlspecialchars($registro['Nombre']);  ?>" name="nombre">
    </div>
    <div class="mb-2">
      <input type="text" class="form-control" Value="<?php echo htmlspecialchars($registro['Apellido']);  ?>" name="apellido">
    </div>
    <div class="mb-2">
      <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Id']);  ?>" readonly name="id">
    </div>
    <div class="mb-2">
      <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Correo']);  ?>" name="correo">
    </div>
    <div class="mb-2">
      <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Edad']);  ?>" name="edad">
    </div>
    <div class="mb-2">
      <input type="text" class="form-control" value="<?php echo htmlspecialchars($registro['Telefono']);  ?>" name="tel">
    </div>
    <button type="submit" class="btn btn-warning">Enviar</button>
  </div>
</form>
    </div>
    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

?>