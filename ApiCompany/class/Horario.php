<?php

class Horario{

    private $id_horario;
    private $hora_ingreso;
    private $hora_salida;
    private $id_grupo;


    public function __construct()
    {
        
    }

    public function __construct1($id_horario,$hora_ingreso,$hora_salida,$id_grupo)
    {
        $this->id_horario=$id_horario;
        $this->hora_ingreso=$hora_ingreso;
        $this->hora_salida=$hora_salida;
        $this->id_grupo=$id_grupo;
    }


    public function __construct2($data)
    {
        $this->id_horario=$data['id_horario'];
        $this->hora_ingreso=$data['hora_ingreso'];
        $this->hora_salida=$data['hora_salida'];
        $this->id_grupo=$data['id_grupo'];
    }

    public function setId_horario($id_horario){
        $this->id_horario=$id_horario;
    }

    public function getId_horario(){
        return $this->id_horario;
    }


    public function setHora_ingreso($hora_ingreso){
        $this->hora_ingreso=$hora_ingreso;
    }

    public function getHora_ingreso(){
        return $this->hora_ingreso;
    }

    public function setHora_salida($hora_salida){
        $this->hora_salida=$hora_salida;
    }

    public function getHora_salida(){
        return $this->hora_salida;
    }

    public function setId_main($id_grupo){
        $this->id_main=$id_grupo;
    }

    public function getId_main(){
        return $this->id_grupo;
    }
}