<?php
    if (!isset($_POST)){
        $nombre= $_POST['usuario'];
        $contraseña= $_POST['pass'];
        echo ('Hola '.$nombre.'. Su contraseña es: '.$pass);
    }else{
        echo "No se recibieron datos.";
    }
?>
