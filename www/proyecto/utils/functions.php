<?php

include "connection.php";
include "queries.php";
include "exceptions.php";

function conexion(){
    $conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexion;
}

function confirmPOST($campo, $vuelta){
    if (isset($_POST[$campo])) {
        return $_POST[$campo];
    } else {
        $error = "debes de indicar el $campo";
        include $vuelta;
        die();
    }
}

function confirmLogin($inputLogin, $inputPassword, $login, $password){
    return $inputLogin == $login and password_verify($password, $inputPassword);
}

function confirmLoggedIn(){
    if(!isset($_SESSION)){
        session_start();   
        if(!isset($_SESSION["usuario"])){
            $error = "no estás logueado";
            include "formLogin.php";
            die();
        }
    }
}

function isAdmin($usuario){
    return $usuario->rol == "administrador";
}

function loadMain($usuario){
    if(isAdmin($usuario)){
        header("Location: mainAdmin.php");
    }
    else{
        header("Location: main.php");
    }
}

