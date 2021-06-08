<?php
    if (isset($_POST['usuario'])){
        require "entidades/interfaz.php";
        require "entidades/persona.php";
        require "entidades/usuario.php";
        
        $usuario = new Usuario();
        $usuario->nombre = $_POST['nombre'];
        $usuario->email = $_POST['email'];
        $usuario->usuario = $_POST['usuario'];
        $usuario->pass = $_POST['contraseña'];
        $archivo = 'https://app-calvo-back.herokuapp.com/usuarios/listaUsuarios.json'; 
        $datos = json_encode($usuario);
        require ('funciones/guardarusuario.php');
    }else{
        echo "Ocurrió un error al recibir datos de usuario. ";
    }

    if (isset($_FILES['avatar'])){
        $destino = 'https://app-calvo-back.herokuapp.com/Img/usuarios/';
        $titulo = ($_POST['usuario'].'.jpg');
        $archivo = $_FILES['avatar'];
        require ('funciones/guardarImagen.php');
    }else{
        echo "No se subió una imagen para el usuario. ";
    }
?>
