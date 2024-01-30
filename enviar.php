<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $celular = $_POST['celular'];
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Apellido: $apellido <br> Celular: $celular <br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	if(mail('ba.subero@duocuc.cl', $asunto, $mensaje)){
		echo "Correo enviado";
	}
?>