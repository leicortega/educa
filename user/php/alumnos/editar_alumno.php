<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE alumnos set nombre = :nombre, apellido = :apellido, edad = :edad, direccion = :direccion, telefono = :telefono,
                             correo = :correo, identificacion = :identificacion, id_sede = :id_sede where id = :id');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':apellido', $_POST['apellido']);
$sql->bindParam(':edad', $_POST['edad']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->bindParam(':identificacion', $_POST['identificacion']);
$sql->bindParam(':id_sede', $_POST['id_sede']);
$sql->bindParam(':id', $_POST['id']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;
