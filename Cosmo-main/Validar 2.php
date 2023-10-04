<?php
$error;
if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    if($usuario == "Max Londoño" && $contraseña == "Vikz077"){
        $error = "OK";
        header("Location: http://localhost/Cosmo-main/index%20WL.php");
    }else{
        $error = "incorrecto";
        header("Location: Log in.php?error=$error");
    }
}else{    
    $error = "vacío";
    header("Location: Log in.php?error=$error");
}

?>