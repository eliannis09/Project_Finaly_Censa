<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';
  $con=new Conexion();
  $con=$con->conectar();  
  if($con){   
    //Ingresa un usuario a la tabla usuarios
    $sql="UPDATE `t_usuario` SET `Documento`='$_REQUEST[Documento]',`NombreU`='$_REQUEST[Nombre]',`TipoDoc`='$_REQUEST[Tdocumento]',`Correo`='$_REQUEST[Correo]',`FechaNacimiento`='$_REQUEST[F_nacimiento]',`Contacto`='$_REQUEST[Contacto]' WHERE Documento = $_REQUEST[Documento];"; 
    try{     
    $consulta=$con->prepare($sql);  
    
   

   
      $consulta->execute();
        header("Location: ../cuenta.php?mensaje=actualizar");
    }
    catch (Exception $e){
        header("Location: ../cuenta.php?mensaje=error");
    }
      
    
  }
?>    
