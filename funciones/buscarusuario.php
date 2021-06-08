<?php
    if (isset($_POST['usuario'])){
        $archivo = '../usuarios/listaUsuarios.json';
        require ('leerusuario.php');
        $UsuarioAbuscar = $_POST['usuario'];
        
        $MiArray = json_decode($mostrar, true);

        foreach($MiArray as $usuario){
            $Encontrado = $usuario["usuario"];
            
            if (!strcmp($UsuarioAbuscar, $Encontrado)){
                $Respuesta = "false";
                break;
            }else{
                $Respuesta = "true";
            }
        }    
        echo $Respuesta;
    }   
?>