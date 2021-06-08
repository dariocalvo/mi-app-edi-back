<?php
    if (isset($archivo['name']) && $archivo['name'] != "") {
        $tipo = $archivo['type'];
        $tamano = $archivo['size'];
        $temp = $archivo['tmp_name'];
        if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo " 
            Tipo o tamaño del archivo seleccionado como imagen no admitido.
            Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.
            NO se guardo imagen de usuario. ";
        }else{
            if (move_uploaded_file($temp, $destino.$titulo)) {
                chmod($destino.$titulo, 0777);
                //echo "Imagen guardada. ";
            } else {
                echo "Ocurrió algún error al subir el fichero. No pudo guardarse. ";
            }
        }
    }
?>