<?php

session_start();
require ('conexion.php');

$conexion = conexion();

$identificacion = $_POST['identificacion'];
$password = MD5($_POST['password']);

$sql = $conexion->prepare('SELECT * from usuarios where identificacion = :identificacion and password = :password');
$sql->bindParam(':identificacion', $identificacion);
$sql->bindParam(':password', $password);
$sql->execute();

$resultado = $sql->rowCount();
$datos = $sql->fetchAll();

if ($resultado == 1) {
    $_SESSION['user'] = $datos[0]['identificacion'];
    header('location:../../../');
} else {
    header('location:./login.php?e=1');
}