<?php

class Usuario extends Persona implements Interfaz{
  
    public $usuario;
    public $pass;
    public static $cantidad = 0;
  
    public function GetNombre(){
        return $this->nombre;
    }

    public function GetEmail(){
        return $this->email;
    }

    public function GetUsuario(){
        return $this->usuario;
    }

    public function GetPass(){
        return $this->pass;
    }

    public static function RetornarCantidad(){
        return Usuario::$cantidad;
    }

    public function __construct(){
        parent::__construct();
        Usuario::$cantidad++;
        $this->usuario = "";
        $this->pass = ""; 
    }

    public function funcAbst(){

    }

    public function Metodo(){} 


    }
?>
