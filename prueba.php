<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $celular = $_POST ['celular']
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
    
        $correo = 'suberobarbara14@gmail.com';
        $asunto = 'Asunto del correo';
        $mensaje = $nombre + $apellido + $celular +$email + $mensaje ;
    
        // Envío del correo
        if (@mail($correo, $asunto, $mensaje)) {
            echo 'El correo se ha enviado correctamente.';
        } else {
            echo 'Hubo un error al enviar el correo. Detalles del error: ' . error_get_last()['message'];
    
        }
    }
?>