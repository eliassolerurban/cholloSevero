<?php

class Usuario{
    
    public function __construct(
        private int $id,
        public string $nombre,
        private string $login,
        private string $password,
        public string $rol
    ){
    }
    
    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function anyadirChollo(){

    }

    public function borrarChollo($chollo){

    }

    public function editarChollo($chollo){

    }

    public function votarChollo($chollo){

    }
    
}