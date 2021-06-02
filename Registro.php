<?php
    if (isset($_POST)){
        var_dump($_POST);
        echo 'Datos del usuario recibidos';
    }else{
        echo 'No hay datos de usuario';
    }

    if (isset($_FILES['avatar'])){
        var_dump($_FILES);
        echo 'se cargo una imagen';
    }else{
        echo 'No llego imagen con los datos';
    }
?>
