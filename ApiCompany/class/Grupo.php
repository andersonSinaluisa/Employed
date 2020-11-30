<?php


class Grupo{

    private $id_grupo;
    private $codigo;
    private $numero;
    private $id_main;


    public function __construct()
    {
        
    }

    public function __construct1($id_grupo,$codigo,$numero,$id_main)
    {
        $this->id_grupo=$id_grupo;
        $this->codigo=$codigo;
        $this->numero = $numero;
        $this->id_main = $id_main;
    }

    public function __construct2($data)
    {
        $this->id_grupo=$data['id_grupo'];
        $this->codigo=$data['codigo'];
        $this->numero = $data['numero'];
        $this->id_main = $data['id_main'];
    }

    public function setId_grupo($id_grupo){
        $this->id_grupo=$id_grupo;
    }

    public function getId_grupo(){
        return $this->id_grupo;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    public function setNumero($numero){
         $this->numero=$numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
}