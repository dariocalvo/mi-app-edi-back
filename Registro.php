<?php
    if (isset($_POST)){
        var_dump($_POST);
    }else{
        echo 'No llegaron datos del usuario';
    }

    if (isset($_FILES)){
        var_dump($_FILES);
        
    }else{
        echo 'No llego imágen';
    }
    
    
    
    
?>
