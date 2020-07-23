<?php

require ('../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('DELETE from institucion where id = :id');
$sql->bindParam(':id', $_POST['id']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;