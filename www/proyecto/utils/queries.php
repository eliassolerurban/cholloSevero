<?php

function qSeleccionarUsuario(){
    return "select * from usuario where login = :login";
}