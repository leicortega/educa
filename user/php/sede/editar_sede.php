<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE sede set nombre = :nombre, direccion = :direccion, telefono = :telefono, correo = :correo where id = :id');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->bindParam(':id', $_POST['id']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;
