<?php
    if (isset($_POST)){
        var_dump($_POST);
    }else{
        echo 'No llegaron datos del usuario';
    }

    if (isset($_FILE)){
        var_dump($_FILE);
    }else{
        echo 'No llego imágen';
    }
    
    
    
    
?>
