<?php

class Usuario{
    private int $id;
    
    public function __construct(
        public string $nombre,
        private string $login,
        private string $password,
        public string $rol
    )
    {
        
    }
}