<?php 

// requerimos la conexion con la base de datos
require ('../../../assets/php/validaciones/conexion.php');

use  PHPMailer \ PHPMailer \ PHPMailer ;
use  PHPMailer \ PHPMailer \ SMTP;
use  PHPMailer \ PHPMailer \ Exception ;

require ('../../../assets/php/lib/PHPMailer/Exception.php');
require ('../../../assets/php/lib/PHPMailer/PHPMailer.php');
require ('../../../assets/php/lib/PHPMailer/SMTP.php');

// llamar la conexion
$conexion = conexion();
// llamar la libreria PHPMailer
$mail = new PHPMailer(true);

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
    // $men  = "Correo enviado por: Educa";
	// $men .= "\nA continuación encontrará los datos de acceso a la plataforma.";
	// $men .= "\nUsuario: ".$_POST['identificacion'];
	// $men .= "\nContraseña: ".$clave;
	// $men .= "\nURL: https://educa.com";

	// $mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->Host       = 'smtp.gmail.com';                 // Specify main and backup SMTP servers
	// $mail->SMTPAuth   = true;                             // Enable SMTP authentication
	// //$mail->Username   = 'nextdvp@gmail.com';            // SMTP username
	// $mail->Username   = 'oscarruiz2614@gmail.com'; 
	// //$mail->Password   = '2431*+Next-Dev';                  // SMTP password
	// $mail->Password   = 'oscarruiz123'; 
	// $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    // $mail->Port       = 587;                              // TCP port to connect to
    // // $mail->SMTPDebug  = 4;                         

	// $mail->From     = $_POST['correo'];
	// $mail->FromName = $_POST['nombre'];
	// $mail->addAddress('nextdvp@gmail.com', 'Next Dev');   

	// $mail->Subject = 'Acceso a la plataforma Educa';
	// $mail->Body    = $men;

	// if(!$mail->send()) {
	//     print_r( 'Error del mensaje: ' . $mail->ErrorInfo );
	// } else {
	//     echo $datos; 
	// }

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'oscarruiz2614@gmail.com';                     // SMTP username
		$mail->Password   = 'oscarruiz123';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	
		//Recipients
		$mail->setFrom('oscarruiz2614@gmail.com', 'Educa');
		$mail->addAddress($_POST['correo'],  $_POST['nombre']);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		$men  = "Correo enviado por: Educa";
		$men .= "\nA continuación encontrará los datos de acceso a la plataforma.";
		$men .= "\nUsuario: ".$_POST['identificacion'];
		$men .= "\nContraseña: ".$clave;
		$men .= "\nURL: https://educa.com";

		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Acceso a la plataforma Educa';
		$mail->Body    = $men;
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		$mail->send();
		echo 'mensaje enviado';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
