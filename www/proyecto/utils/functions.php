<?php

include "connection.php";
include "queries.php";
include "exceptions.php";

function conexion() {
    $conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexion;
}

