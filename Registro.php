<?php
    if (isset $_POST['datos']){
        var_dump($_POST);
    }else{
        echo 'No llegaron datos';
    }


    if (isset $_FILES['avatar']){
        var_dump($_FILES);
    }else{
        echo 'no se cargo imágen';
    }
?>
