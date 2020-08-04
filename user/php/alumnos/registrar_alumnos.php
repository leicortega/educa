<?php 

// requerimos la conexion con la base de datos
require ('../../../assets/php/validaciones/conexion.php');
require ('../../../assets/php/lib/PHPMailer/PHPMailerAutoload.php');

// llamar la conexion
$conexion = conexion();
// llamar la libreria PHPMailer
$mail = new PHPMailer;

$clave = generar();
$password = MD5(generar());

$sql = $conexion->prepare('INSERT into alumnos values ("", :nombre, :apellido, :edad,   :direccion, :telefono, :correo, :identificacion, :password, :id_sede)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':apellido', $_POST['apellido']);
$sql->bindParam(':edad', $_POST['edad']);
$sql->bindParam(':direccion', $_POST['direccion']);
$sql->bindParam(':telefono', $_POST['telefono']);
$sql->bindParam(':correo', $_POST['correo']);
$sql->bindParam(':identificacion', $_POST['identificacion']);
$sql->bindParam(':password', $password);
$sql->bindParam(':id_sede', $_POST['id_sede']);
$sql->execute();

$datos = $sql->rowCount();

if ($datos == 1) {
    $men  = "Correo enviado por: Educa";
	$men .= "\nA continuación encontrará los datos de acceso a la plataforma.";
	$men .= "\nUsuario: ".$_POST['identificacion'];
	$men .= "\nContraseña: ".$password;
	$men .= "\nURL: https://educa.com";

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host       = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
	$mail->SMTPAuth   = true;                             // Enable SMTP authentication
	$mail->Username   = 'nextdvp@gmail.com';            // SMTP username
	$mail->Password   = '2431*+Next-Dev';                  // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                              // TCP port to connect to
    // $mail->SMTPDebug  = 4;                         

	$mail->From     = $_POST['correo'];
	$mail->FromName = $_POST['nombre'];
	$mail->addAddress('nextdvp@gmail.com', 'Next Dev');   

	$mail->Subject = 'Acceso a la plataforma Educa';
	$mail->Body    = $men;

	if(!$mail->send()) {
	    print_r( 'Error del mensaje: ' . $mail->ErrorInfo );
	} else {
	    echo $datos; 
	}
}

// Funcion para generar contraseñas
function generar($es = 6){
    $pass = array();
    for($i = 1; $i < $es; $i++){
        $pass[] = chr(mt_rand(32, 126));
    }
    return implode($pass);
}
