<?php

require_once dirname(__FILE__) . "/config.php";
session_start();

function checkPermission($page){

    global $permissions;

    if($permissions[$page]){
        if(!$_SESSION["loggedIn"]){
            header("Location: ./login.php");
        }

    }

    return true;

}
