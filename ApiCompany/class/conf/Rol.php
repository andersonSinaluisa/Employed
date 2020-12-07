<?php
require_once('./core/mainModel.php');

class Rol extends MainModel{


    private $id_rol;
    private $codigo;
    private $rol;
    private $estado;
    private $id_main;

    public function __construct()
    {
        
    }

    public function setData($id_rol,$codigo,$rol,$estado,$id_main){
        $this->id_rol=$id_rol;
        $this->codigo=$codigo;
        $this->rol=$rol;
        $this->estado=$estado;
        $this->id_main=$id_main;
    }

    public function setData1($data){
        $this->id_rol=$data['id_rol'];
        $this->codigo=$data['codigo'];
        $this->rol = $data['rol'];
        $this->estado=$data['estado'];
        $this->id_main=$data['id_main'];
    }

    public function setId_rol($id_rol){
        $this->id_rol=$id_rol;
    }

    public function getId_rol(){
        return $this->id_rol;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    public function setRol($rol){
        $this->rol =$rol;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setEstado($estado){
        $this->estado =$estado;
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

    public function save(){
        $statement = "INSERT INTO conf_rol(codigo,rol,estado,id_main)
        values(:Codigo,:Rol,:Estado,:Id_main)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Codigo",$this->getCodigo());
        $sql->bindParam(":Rol",$this->getRol());
        $sql->bindParam(":Estado",$this->getEstado());
        $sql->bindParam(":Id_main",$this->getId_main());
        $sql->execute();
        return $sql->rowCount();
    }
    
}