<?php 
  //Se conecta a la base de datos
  include_once 'conexion.php';

  $con=new Conexion();
  $con=$con->conectar();  
  if($con){   
    //Ingresa un usuario a la tabla usuarios
    $sql="INSERT INTO `t_proyectovivienda`(`CodVivienda`, `Nombre`, `Direccion`, `Constructora`, `Contacto`)
          VALUES ('$_REQUEST[CodVivienda]','$_REQUEST[Nombre]','$_REQUEST[Direccion]','$_REQUEST[Constructora]','$_REQUEST[Contacto]') ";         
    $consulta=$con->prepare($sql);   
    $consulta->execute();  
    //Redirecciona               
    /*if ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){ 
      $_SESSION['logueado'] = true;
      $_SESSION['Correo'] = $_REQUEST['Correo'];
      $_SESSION['nombre'] = $fila['nombre'];*/
      //Abre una página en caso de ser positivo
      header("Location: ../index.php?mensaje='Ingreso correcto'");
    }  /*                    
    else {
      //Abre una página en caso de ser negativo
      header("Location: ../iniciar_s.php?mensaje='no existe'");
    }                    
                   
  }*/
?>    
