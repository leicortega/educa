<?php

// requerimos la conexion con la base de datos
require ('../../../assets/php/validaciones/conexion.php');

// llamar la conexion
$conexion = conexion();

$sql = $conexion->prepare('DELETE from alumnos where id = :id');
$sql->bindParam(':id', $_POST['id']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;