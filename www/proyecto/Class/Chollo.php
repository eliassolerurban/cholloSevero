<?php

class Chollo{
    
    public function __construct(
        private int $id,
        public string $titulo,
        public float $precio,
        public int $id_usuario,
        public string $descripcion,
        public string $fecha,
        public int $votos
    ){
    }
}