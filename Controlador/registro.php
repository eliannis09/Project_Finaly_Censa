<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';
  $con=new Conexion();
  $con=$con->conectar();  

  if($con){   
    //Ingrese datos a la base de datos
    $sql="INSERT INTO `registropersonas`(`Id`, `Nombre`, `Apellido`, `Edad`, `Correo`, `Telefono`) 
                                  VALUES ('$_REQUEST[Documento]', '$_REQUEST[Nombre]', '$_REQUEST[Apellido]', '$_REQUEST[Edad]', '$_REQUEST[Correo]', '$_REQUEST[Telefono]')";
    $consulta=$con->prepare($sql);
    $consulta->execute();


    header("Location: ../index.php?mensaje='Si Registro'");

  }else {
    header("Location: ../index.php?mensaje='No Registro'");

  }
?>    
