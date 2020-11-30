<?php

class Empresa{

    private $id;
    private $codigo;
    private $nombre_empresa;
    private $representante;
    private $identificacion;
    private $pais;
    private $ciudad;
    private $direcccion;
    private $sector_empresa;
    private $id_usuario;



    public function __construct()
    {
        
    }


    public function setData($id,$codigo,$nombre_empresa,$representante,$identificacion,$pais,$ciudad,
    $direcccion,$sector_empresa,$id_usuario)
    {
        $this->id=$id;
        $this->codigo=$codigo;
        $this->nombre_empresa=$nombre_empresa;
        $this->representante=$representante;
        $this->identificacion=$identificacion;
        $this->pais=$pais;
        $this->ciudad=$ciudad;
        $this->direcccion=$direcccion;
        $this->sector_empresa=$sector_empresa;
        $this->id_usuario=$id_usuario;
    }



    public function setData1($data)
    {
        $this->id=$data['id'];
        $this->codigo=$data['codigo'];
        $this->nombre_empresa = $data['nombre_empresa'];
        $this->representante=$data['representante'];
        $this->identificacion=$data['identificacion'];
        $this->pais=$data['pais'];
        $this->ciudad=$data['ciudad'];
        $this->direcccion=$data['direccion'];
        $this->sector_empresa=$data['sector_empresa'];
        $this->id_usuario=$data['id_usuario'];
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
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

    public function setRepresentante($representante){
        $this->representante=$representante;
    }

    public function getRepresentante(){
        return $this->representante;
    }

    public function setIdentificacion($identificacion){
        $this->identificacion=$identificacion;
    }

    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function setPais($pais){
        $this->pais=$pais;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setDireccion($direcccion){
        $this->direcccion=$direcccion;
    }

    public function getDireccion(){
     return $this->direcccion;
    }

    public function setSector_empresa($sector_empresa){
        $this->sector_empresa=$sector_empresa;
    }

    public function getSector_empresa(){
        return $this->sector_empresa;
    }
    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    public function getId_usuario(){
        return $this->id_usuario;
    }
}