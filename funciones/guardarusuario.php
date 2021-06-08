<?php
// si el archivo ya fue creado extraigo el texto, le quito el ']' final, pongo una ',' y agrego el usuario 
    if(file_exists($archivo)){
        $destino= fopen($archivo, 'r+');
        $texto = file_get_contents($archivo);
        $textorecortado = substr($texto, 0, -1);
        $nuevotexto = $textorecortado.','.$datos;
        fputs($destino, $nuevotexto.']');
    }else{
// Si el es primero que creo encierro el json con '[]'        
        $destino = fopen($archivo, 'w');
        fputs($destino, '['.$datos.']');
    }
// con esto logro que el json siempre divida con {}, y quede todo entre []    
    fclose($destino);
    echo "Te has registrado con éxito. ";
    
?>