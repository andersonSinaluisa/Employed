<?php

require_once('./core/mainModel.php');
class Accion extends MainModel{

    private $id;
    private $accion;
    private $estado;

    public function __construct()
    {
        
    }

    public function setData($id,$accion,$estado)
    {
        $this->id=$id;
        $this->accion=$accion;
        $this->estado=$estado;
    }
    public function setData1($data)
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

    public function save(){
        $statement = "INSERT INTO conf_accion(accion,estado)
        values(:Accion,:Estado)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Accion",$this->getAccion());
        $sql->bindParam(":Estado",$this->getEstado());
        $sql->execute();
        return $sql->rowCount();
    }
}