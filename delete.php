<?php
include_once "Controlador/conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conexion = new Conexion();
    $conexion = $conexion->conectar();

    if ($conexion) {
        $sql = "DELETE FROM registropersonas WHERE Id = :id";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($consulta->execute()) {
        
            header("Location: index.php");
            exit();
        } else {
            echo " Error al eliminar el registro.";
        }
    } else {
        echo " Error al conectar con la base de datos.";
    }
} else {
    echo " ID no especificado.";
}
?>