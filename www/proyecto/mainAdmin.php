<?php

include "utils/functions.php";
include "Class/Usuario.php";

if(!isset($_SESSION)){
    session_start();   
    if(!isset($_SESSION["usuario"])){
        $error = "no estás logueado";
        include "formLogin.php";
        die();
    }
}

else if(!isAdmin($_SESSION["usuario"])){
    die("tienes que ser administrador :(");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main Admin</title>
</head>
<body>
    <h1>Bienvenido, <?= $_SESSION["usuario"]->nombre ?></h1>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>