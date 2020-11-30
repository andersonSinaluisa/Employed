<?php

class Modulo{
    private $id_modulo;
    private $codigo;
    private $nombre;
    private $estado;

    public function __construct()
    {
        
    }
    public function __construct1($id_modulo,$codigo,$nombre, $estado)
    {
        $this->id_modulo= $id_modulo;
        $this->codigo=$codigo;
        $this->nombre = $nombre;
        $this->estado=$estado;
    }
    public function __construct2($data)
    {
        $this->id_modulo= $data['id_modulo'];
        $this->codigo=$data['codigo'];
        $this->nombre = $data['nombre'];
        $this->estado=$data['estado'];
    }

    public function setId_modulo($id_modulo){
        $this->id_modulo=$id_modulo;
    }

    public function getId_modulo(){
        return $this->id_modulo;
    }

    public function setCodigo($codigo){
        $this->codigo= $codigo;
    }

    public function getCodigo(){
        return $this->codigo;

    }


    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }


    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }
}


