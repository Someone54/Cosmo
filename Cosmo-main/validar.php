<?php

if (isset($_POST['submit'])){

    $isNombreValid = false;
    $isTelefonoValid = false;
    $isCorreoValid = false;
    $isNumberDocValid = false;
    $isDateValid = false;
        
    //Aqui empieza la validación del campo nombre 
    //la función empty es para verificar si esta vacia 
    if(empty($nombre)){
        echo "<p class='error'> Agregar tu nombre </p>";
    } else {
        //la función strlen cuenta el número de caracters
        if(strlen($nombre)>60){
            echo "<p class='error'> la maximo es de 60 caracteres en el campo nombre</p>";
        }elseif(strlen($nombre)<5){
            echo "<p class='error'> la minimo es de 5 caracteres en el campo nombre</p>";
        }else {
            $isNombreValid = true;
        }
    }
    
    var_dump($date);
    


    //Aqui empieza la validación del campo telefono| 
    if(empty($telefono)){
        echo "<p class='error'> Agregar tu telefono </p>";
    } else {
        //la función strlen cuenta el número de caracters
        if(strlen($telefono)>16){
            echo "<p class='error'> la maximo es de 16 caracteres en el campo telefono</p>";
        }elseif(strlen($telefono)<6){
            echo "<p class='error'> la minimo es de 6 caracteres en el campo telefono</p>";
        //filter_var es un comando de validación de correos y FILTER_SANITIZE_NUMBER_INT permite validar si es un número, +, espacio o -, recuerda que ! significa NO
        }elseif(!filter_var($telefono, FILTER_SANITIZE_NUMBER_INT)){
            echo "<p class='error'> El telefono es incorrecto </p>";
        }else {
            $isTelefonoValid = true;
        }
    }

    //Aqui empieza la validación del campo correo 
    if(empty($correo)){
        echo "<p class='error'> Agregar tu correo </p>";
    }else {
        //filter_var es un comando de validación de correos y FILTER_VALIDATE_EMAIL permite validar si es un correo, recuerda que ! significa NO
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            echo "<p class='error'> El Correo es incorrecto </p>";
        }else {
            $isCorreoValid = true;
        }
    }

    //Aqui empieza la validación del campo numeroDoc 
    //la función empty es para verificar si esta vacia 
    if(empty($numeroDoc)){
        echo "<p class='error'> Agregar tu numeroDoc </p>";
    } else {
        //la función strlen cuenta el número de caracters
        if((strlen($numeroDoc)>12)&&($tipoId=="CI")){
            echo "<p class='error'> lo maximo es de 12 caracteres en el campo numeroDoc</p>";
        }elseif((strlen($numeroDoc)<6)&&($tipoId=="CI")){
            echo "<p class='error'> la minimo es de 6 caracteres en el campo numeroDoc</p>";
        }elseif((strlen($numeroDoc)>18)&&($tipoId=="CE")){
            echo "<p class='error'> lo maximo es de 18 caracteres en el campo numeroDoc</p>";
        }elseif((strlen($numeroDoc)<8)&&($tipoId=="CE")){
            echo "<p class='error'> la minimo es de 8 caracteres en el campo numeroDoc</p>";
        }else {
            $isNumberDocValid = true;
        }
    }

    //Aqui empieza la validación del campo consulta 
   

    $submitCorrect = $isNombreValid and $isTelefonoValid and $isCorreoValid and $isNumberDocValid and $isDateValid;

    if($submitCorrect) {
        echo "<script>";

        echo "Swal.fire(
            'Te has Inscrito!',
            'Te estaremos contactando!',
            'success'
          )";

        echo "</script>";
    }
}

?>