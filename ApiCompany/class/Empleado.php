<?php

class Empleado {

    private $id_empleado;
    private $id_persona;
    private $cargo;
    private $id_area;
    private $estado;
    private $id_main;

    public function __construct()
    {
        
    }

    public function setData($id_empleado,$id_persona,$cargo,$id_area,$estado,$id_main)
    {
        $this->id_empleado=$id_empleado;
        $this->id_persona=$id_persona;
        $this->cargo = $cargo;
        $this->id_area=$id_area;
        $this->estado=$estado;
        $this->id_main=$id_main;
    }


    public function setData1($data)
    {
        $this->id_empleado=$data['id_empleado'];
        $this->id_persona=$data['id_persona'];
        $this->cargo = $data['cargo'];
        $this->id_area=$data['id_area'];
        $this->estado=$data['estado'];
        $this->id_main=$data['id_main'];
    }

    public function setId_empleado($id_empleado){
        $this->id_empleado=$id_empleado;
    }
    public function getId_empleado(){
        return $this->id_empleado;
    }

    public function setId_persona($id_persona){
        $this->id_persona=$id_persona;
    }
    public function getId_persona(){
        return $this->id_persona;
    }
    public function setId_cargo($cargo){
        $this->cargo=$cargo;
    }
    public function getId_cargo(){
        return $this->cargo;
    }
    public function setId_are($id_area){
        $this->id_area=$id_area;
    }
    public function getId_area(){
        return $this->id_area;
    }
    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setId_main($id_main){
        $this->id_main=$id_main;
    }
    public function getId_main(){
        return $this->id_main;
    }
}