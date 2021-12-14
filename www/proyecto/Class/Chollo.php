<?php

class Chollo{
    private int $id;

    public function __construct(
        public string $titulo,
        public float $precio,
        public int $id_usuario,
        public string $descripcion,
        public string $fecha,
        public int $votos
    ){
    }

    public function setId($id){
        $this->id = $id;
    }
}