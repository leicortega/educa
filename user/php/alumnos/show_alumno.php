<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('SELECT * from alumnos where id = '.$_POST['id']);
$sql->execute();

$datos = $sql->fetchAll();

foreach ($datos as $row) { ?>
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
         <input class="form-control" type="text" name="nombre" required="" value="<?php echo $row['nombre']; ?>" />
    </div>
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input class="form-control" type="text" name="apellido" required="" value="<?php echo $row['apellido']; ?>" />
    </div>
    <div class="form-group">
        <label for="edad">Edad:</label>
        <input class="form-control" type="number" name="edad" required="" value="<?php echo $row['edad']; ?>" />
    </div>
    <div class="form-group">
        <label for="correo">Correo:</label>
        <input class="form-control" type="email" name="correo"  value="<?php echo $row['correo']; ?>" />
    </div>
    <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input class="form-control" type="text" name="direccion"  value="<?php echo $row['direccion']; ?>" />
    </div>
    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input class="form-control" type="number"  value="<?php echo $row['telefono']; ?>" />
    </div>
    <div class="form-group">
        <label for="identificacion">Identificación:</label>
        <input class="form-control" type="number" name="identificacion" required="" value="<?php echo $row['identificacion']; ?>" />
    </div>
    <div class="form-group">
        <!-- <label for="password">Contraseña:</label> -->
        <input class="form-control" type="hidden" name="password" required="" value="<?php echo $row['password']; ?>" />
    </div>
    <div class="form-group">
        <label for="select01">Sede</label>
        <select id="select01" name="id_sede" data-toggle="select" required="" class="form-control">
            <option value="">Seleccione la sede</option>
            <?php 

                $sql = $conexion->prepare('SELECT * from sede');
                $sql->execute();

                $datos = $sql->fetchAll();

                foreach ($datos as $dato) { ?>
                    <option value="<?php echo $dato['id']; ?>"><?php echo $dato['nombre']; ?></option>
                <?php }

            ?>

        </select>
    </div>
                            
    <div class="form-group text-center">
        <button class="btn btn-primary" type="submit">Agregar Estudiante</button>
    </div>
    
    

<?php } ?>