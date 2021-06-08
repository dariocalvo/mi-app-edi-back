<?php 

abstract class Persona{
    public $nombre;
    public $email;

protected function __construct(){
    $this->nombre = "";
    $this->email = "";
}

public function func1(){
    
}   

public abstract function funcAbst();

}

?>