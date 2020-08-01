<?php 

// requerimos la conexion con la base de datos
require ('../../../assets/php/validaciones/conexion.php');

// llamar la conexion
$conexion = conexion();

$sql = $conexion->prepare('INSERT into alumnos values ("", :nombre, :apellido, :edad,   :direccion, :telefono, :correo,
                                                 :identificacion, :password, :id_sede)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':apellido', $_POST['apellido']);
$sql->bindParam(':edad', $_POST['edad']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->bindParam(':identificacion', $_POST['identificacion']);
$sql->bindParam(':password', $_POST['password']);
$sql->bindParam(':id_sede', $_POST['id_sede']);
$sql->execute();

$datos = $sql->rowCount();

echo $datos;
