<?php
require_once('./core/mainModel.php');

class AccionMenu extends MainModel{

    private $id;
    private $id_accion;
    private $id_menu;
    private $id_rol;

    public function __construct()
    {
        
    }
    public function setData($id,$id_accion,$id_menu,$id_rol)
    {
        $this->id=$id;
        $this->id_accion=$id_accion;
        $this->id_menu=$id_menu;
        $this->id_rol=$id_rol;
    }

    public function setData1($data)
    {
        $this->id=$data['id'];
        $this->id_accion_menu=$data['id_accion'];
        $this->id_menu=$data['id_menu'];
        $this->id_rol=$data['id_rol'];
    }

    public function setId($id){
        $this->id=$id;

    }

    public function getId(){
        return $this->id;
    }

    public function setId_accion($id_accion){
        $this->id_accion=$id_accion;
    }

    public function getId_accion(){
        return $this->id_accion;
    }

    public function setId_menu($id_menu){
        $this->id_menu=$id_menu;
    }

    public function getId_menu(){
        return $this->id_menu;
    }

    public function setId_rol($id_rol){
        $this->id_rol=$id_rol;
    }

    public function getId_rol(){
        return $this->id_rol;
    }

    public function save(){
        $statement= "INSERT INTO conf_accion_menu(id_accion, id_menu, id_rol) 
        values (:Id_accion,:Id_menu,:Id_rol)";
        $sql=MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Id_accion",$this->getId_accion());
        $sql->bindParam(":Id_menu",$this->getId_menu());
        $sql->bindParam(":Id_rol",$this->getId_rol());
        $sql->execute();
        return $sql->rowCount();
    }

}