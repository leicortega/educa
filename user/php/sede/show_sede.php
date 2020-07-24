<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('SELECT * from sede where id = '.$_POST['id']);
$sql->execute();

$datos = $sql->fetchAll();

foreach ($datos as $row) { ?>
    
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" required="" value="<?php echo $row['nombre']; ?>"/>
    </div>
    <div class="form-group">
        <label for="correo">Correo:</label>
        <input class="form-control" type="email" name="correo" required="" value="<?php echo $row['correo']; ?>"/>
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input class="form-control" type="text" name="direccion" required="" value="<?php echo $row['direccion']; ?>"/>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input class="form-control" type="number" required="" name="telefono" value="<?php echo $row['telefono']; ?>"/>
    </div>

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Editar Sede</button>
    </div>
    

<?php } ?>