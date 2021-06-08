<?php
    $mostrar = '';
    if(file_exists($archivo)){
        
        $archivo = fopen ($archivo, 'r');
        while (!feof($archivo)){
            $mostrar = fgets($archivo);
        }
        fclose($archivo);
        return $mostrar;
    
    }else{
        echo 'No se encontró el archivo.';
    }
?>