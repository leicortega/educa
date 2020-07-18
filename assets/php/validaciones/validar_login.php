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

if ($resultado == 1) {

    $datos = $sql->fetchAll();

    $_SESSION['user'] = $datos[0]['identificacion'];
    $_SESSION['tipo_user'] = 'user';
    header('location:../../../');

} else {
    $sql = $conexion->prepare('SELECT * from alumnos where identificacion = :identificacion and password = :password');
    $sql->bindParam(':identificacion', $identificacion);
    $sql->bindParam(':password', $password);
    $sql->execute();

    $resultado = $sql->rowCount();

    if ($resultado == 1) {

        $datos = $sql->fetchAll();

        $_SESSION['user'] = $datos[0]['identificacion'];
        $_SESSION['tipo_user'] = 'alumno';
        header('location:../../../');

    } else {
        $sql = $conexion->prepare('SELECT * from profesores where identificacion = :identificacion and password = :password');
        $sql->bindParam(':identificacion', $identificacion);
        $sql->bindParam(':password', $password);
        $sql->execute();

        $resultado = $sql->rowCount();

        if ($resultado == 1) {

            $datos = $sql->fetchAll();

            $_SESSION['user'] = $datos[0]['identificacion'];
            $_SESSION['tipo_user'] = 'profesor';
            header('location:../../../');

        } else {
            header('location:../../../login.php?e=1');
        }
    }

}




