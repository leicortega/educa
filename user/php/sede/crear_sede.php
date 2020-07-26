<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('INSERT into sede values ("", :nombre, :direccion, :telefono, :correo , :id_institucion)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->bindParam(':id_institucion', $_POST['id_institucion']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;