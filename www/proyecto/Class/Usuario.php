<?php

class Usuario{
    private int $id;

    public function __construct(
        public string $nombre,
        private string $login,
        private string $password,
        public string $rol
    ){
    }

    public function setId($id){
        $this->id = $id;
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