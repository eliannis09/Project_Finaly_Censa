<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';
  $con=new Conexion();
  $con=$con->conectar();  
  if($con){   
    //Ingresa un usuario a la tabla usuarios
    $sql="DELETE FROM `t_proyectovivienda` WHERE CodVivienda = $_REQUEST[CodVivienda];"; 
           
    $consulta=$con->prepare($sql);   
  
        $consulta->execute();  
        try{
       // header("Location: cerrar.php?mensaje=eliminado");
       header("Location: ../Index.php?mensaje=erro");
    }
    catch (Exception $e){
        header("Location: ../Index.php?mensaje=error");
    }
      
   
  }
?>    
