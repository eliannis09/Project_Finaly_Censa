<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';
  $con=new Conexion();
  $con=$con->conectar();  
 
  if($con){   
    //Ingresa un usuario a la tabla usuarios
    $sql = "DELETE FROM `t_usuario` WHERE Documento = $_REQUEST[Documento];";
           
    $consulta=$con->prepare($sql);   
      $consulta->execute();  
       // header("Location: cerrar.php?mensaje=eliminado");
       try{
       header("Location: ../Cuenta.php?mensaje=erro");
    }
    catch (Exception $e){
        header("Location: ../Cuenta.php?mensaje=error");
    }
      
    
  }
?>    
