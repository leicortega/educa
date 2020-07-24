<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('INSERT into sede values ("", :nombre, :direccion, :telefono, :correo)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;