<?php 

function conexion() {

    $usuario = 'root';
    $pass = '';

    try {

        $pdo = new PDO('mysql:host=localhost;dbname=educa', $usuario, $pass);
        return $pdo;

    } catch (PDOException $e) {

        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();

    }
    
}

?>