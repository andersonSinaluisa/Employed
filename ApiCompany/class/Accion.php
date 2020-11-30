<?php

class Accion{

    private $id;
    private $accion;
    private $estado;

    public function __construct()
    {
        
    }

    public function __construct1($id,$accion,$estado)
    {
        $this->id=$id;
        $this->accion=$accion;
        $this->estado=$estado;
    }
    public function __construct2($data)
    {
        $this->id=$data['id'];
        $this->accion=$data['accion'];
        $this->estado=$data['estado'];
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
    }

    public function setAccion($accion){
        $this->accion=$accion;
    }

    public function getAccion(){
        return $this->accion;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }
}