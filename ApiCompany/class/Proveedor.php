<?php

class Proveedor{

    private $id_proveedor;
    private $codigo;
    private $nombre_empresa;
    private $representante;
    private $identificacion;


    public function __construct($id_proveedor,$codigo,$nombre_empresa,$representante,$identificacion)
    {
        $this->id_proveedor=$id_proveedor;
        $this->codigo=$codigo;
        $this->nombre_empresa=$nombre_empresa;
        $this->representante=$representante;
        $this->identificacion=$identificacion;
    }

    public function setId_proveedor($id_proveedor){
        $this->id_proveedor=$id_proveedor;
    }

    public function getId_proveedor(){
        return $this->id_proveedor;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setNombre_empresa($nombre_empresa){
        $this->nombre_empresa=$nombre_empresa;
    }
    public function getNombre_empresa(){
        return $this->nombre_empresa;
    }

    public function setIdentificacion($identificacion){
        $this->identificacion= $identificacion;
    }

    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function setRespresentate($representante){
        $this->representante=$representante;
    }

    public function getRepresentante(){
        return $this->representante;

    }

    

}