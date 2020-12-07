<?php
require_once('./core/mainModel.php');

class PermisoMenu extends MainModel{

    private $id;
    private $id_menu;
    private $id_rol;
    private $id_main;

    public function __construct()
    {
        
    }


    public function setData($id,$id_menu,$id_rol,$id_main){
        $this->id=$id;
        $this->id_menu=$id_menu;
        $this->id_rol = $id_rol;
        $this->id_main=$id_main;
    }

    public function setData1($data){
        $this->id=$data['id'];
        $this->id_menu=$data['id_menu'];
        $this->id_rol=$data['id_rol'];
        $this->id_main =$data['id_main'];
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getId(){
        return $this->id;
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

    public function setId_main($id_main){
        $this->id_main = $id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }

    public function save(){
        $statement = "INSERT INTO conf_permiso_menu(id_menu,id_rol,id_main)
        values(:Id_menu,:Id_rol,:Id_main)";
        $sql=MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Id_menu",$this->getId_menu());
        $sql->bindParam(":Id_rol",$this->getId_rol());
        $sql->bindParam(":Id_main",$this->getId_main());
        $sql->execute();
        return $sql->rowCount();
    }
}