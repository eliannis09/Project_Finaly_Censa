<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';
  $con=new Conexion();
  $con=$con->conectar();  
  if($con){   
    //Ingresa un usuario a la tabla usuarios
    $sql="UPDATE `t_proyectovivienda` SET CodVivienda='$_REQUEST[CodVivienda]',Nombre='$_REQUEST[Nombre]',Direccion='$_REQUEST[Direccion]',Constructora='$_REQUEST[Constructora]',Contacto='$_REQUEST[Contacto]' WHERE CodVivienda = $_REQUEST[CodVivienda]";
           
    $consulta=$con->prepare($sql);  

    
        $consulta->execute();  
        
        try{
       header("Location: ../index.php?mensaje=actualizar");
        }
        catch (Exception $e){
      
        header("Location: ../index.php?mensaje=error");
    
      
      }
  }
?>    
