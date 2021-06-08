<?php
     if (isset($_POST['usuario'])){
        $archivo = 'usuarios/listaUsuarios.json';
        require ('funciones/leerusuario.php');
        $UsuarioAbuscar = $_POST['usuario'];
        $UsuarioPass = $_POST['contraseña'];

        $MiArray = json_decode($mostrar, true);

        foreach($MiArray as $usuario){
            $UsuarioEncontrado = $usuario["usuario"];
            $PassEncontrado = $usuario["pass"];
            if (strcmp($UsuarioAbuscar, $UsuarioEncontrado) || (strcmp($UsuarioPass, $PassEncontrado))){
                $Respuesta = "false";
            }else{
                $Respuesta = "true";
            //   session_start();
            //   $_SESSION['usuario'] = $_POST['usuario'];
                break;
            }
        }    
        echo $Respuesta;
    }   
?>
