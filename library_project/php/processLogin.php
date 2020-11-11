<?php

require_once "./json.php";
require_once "./config.php";

$username = $_POST["username"];
$pass = $_POST["password"];

//Cargar el JSON
if($users = readJSON(USERS_DATA_FILE)){

    //Buscar el usuario en los datos del JSON
    if(isset($users[$username])){

        $user = $users[$username];

        //Verificar si el password corresponde
        if($pass === $user["password"]){
            //Iniciar la sesión
            session_start();
            //Guardar los datos pertinentes en la sesión
            $_SESSION["loggedIn"] = true;
            $_SESSION["startedAt"] = time();
            $_SESSION["username"] = $user["username"];
            $_SESSION["firstName"] = $user["firstName"];
            $_SESSION["lastName"] = $user["lastName"];
            //Redirigir al home
            header("Location: ../index.php");
        }
        else{
            //mandar error
            //echo "El password '$pass' no corresponde";
            header("Location: ../login.php?error=1");
        }

    }

    //echo "No se encontró el usuario $username";
    header("Location: ../login.php?error=1");

}

echo "Error al cargar los datos de los usuarios";
