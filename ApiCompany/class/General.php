<?php

class General {
    private $id_genr_general;
    private $codigo;
    private $tipo;
    private $nombre;

    public function __construct()
    {
      
    }
    public function setData($id_genr_general,$codigo,$tipo,$nombre)
    {
        $this->id_genr_general=$id_genr_general;
        $this->codigo=$codigo;
        $this->tipo=$tipo;
        $this->nombre=$nombre;
    }

    public function setData1($data)
    {
        $this->id_genr_general=$data['id_genr_general'];
        $this->codigo=$data['codigo'];
        $this->tipo=$data['tipo'];
        $this->nombre=$data['nombre'];
    }

    public function setId_genr_general($id_genr_general){
        $this->id_genr_general=$id_genr_general;
    }

    public function getId_genr_general(){
        return $this->id_genr_general;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
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


    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }
}