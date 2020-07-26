<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();



// preparamos la consulta 
$sql = $conexion->prepare('SELECT * from sede');

// ejecutamos la consulta
$sql->execute();


$datos = $sql->fetchAll();

foreach ($datos as $row) { ?>
    
    <tr>
        <td>
            <span class="js-lists-values-employee-name"><?php echo $row['nombre']; ?></span>
        </td>
        <td><span class="js-lists-values-employee-name"><?php echo $row['direccion']; ?></span></td>
        <td><span class="js-lists-values-employee-name"><?php echo $row['correo']; ?></span></td>
        <td><span class="js-lists-values-employee-name"><?php echo $row['telefono']; ?></span></td>
        <td>
            <button type="button" class="btn btn-warning" onclick="show_sede(<?php echo $row['id']; ?>)"><i class="fa fa-pen"></i></button>
            <button type="button" class="btn btn-danger" onclick="delete_sede(<?php echo $row['id']; ?>, '<?php echo $row['nombre']; ?>')"><i class="fa fa-trash"></i></button>
        </td>
    </tr>

<?php } ?>