<?php
    $destino ="thestuntman92@gmail.com";
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido = "nombre: " . $nombre . "\ntelefono :" . $telefono . "\nasunto: " . $asunto . "\nmensaje: " . $mensaje;

    mail($destino, $asunto, $contenido);
    
    echo "¡Correo enviado exitosamente!";
    header("location:index.html");




?>