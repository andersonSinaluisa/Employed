<?php

class AccionMenu{

    private $id;
    private $id_accion_menu;
    private $id_menu;
    private $id_rol;

    public function __construct()
    {
        
    }
    public function __construct1($id,$id_accion_menu,$id_menu,$id_rol)
    {
        $this->id=$id;
        $this->id_accion_menu=$id_accion_menu;
        $this->id_menu=$id_menu;
        $this->id_rol=$id_rol;
    }

    public function __construct2($data)
    {
        $this->id=$data['id'];
        $this->id_accion_menu=$data['id_accion_menu'];
        $this->id_menu=$data['id_menu'];
        $this->id_rol=$data['id_rol'];
    }

    public function setId($id){
        $this->id=$id;

    }

    public function getId(){
        return $this->id;
    }

    public function setId_accion_menu($id_accion_menu){
        $this->id_accion_menu=$id_accion_menu;
    }

    public function getId_accion_menu(){
        return $this->id_accion_menu;
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


}