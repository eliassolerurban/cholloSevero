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
