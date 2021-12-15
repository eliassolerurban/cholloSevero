<?php

include "utils/functions.php";
include "Class/Usuario.php";

$login = confirmPOST("login", "formLogin.php");
$password = confirmPOST("password", "formLogin.php");

$conexion = conexion();

$sql = qSeleccionarUsuario();
$sql = $conexion -> prepare($sql);
$sql -> setFetchMode(PDO::FETCH_ASSOC);

$isOK = $sql-> execute([
    "login" => $login
]);

$registro = $sql -> fetch(); 

if($registro and confirmLogin($registro["login"], $registro["password"], $login, $password)){
    $usuario = assocToUsuario($registro);
    session_start();
    $_SESSION["usuario"] = $usuario;

    loadMain($usuario);
}
else{
    $error = "credenciales incorrectas";
    include "formLogin.php";
    die();
}


