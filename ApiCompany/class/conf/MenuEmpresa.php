<?php

require_once('./core/mainModel.php');

class MenuEmpresa extends MainModel{

    private $idconf_menu_empresa;
    private $id_menu;
    private  $estado;
    private $id_empresa;


    public function __construct()
    {
        
    }

    public function setData($idconf_menu_empresa,$id_menu,$estado,$id_empresa)
    {
        $this->idconf_menu_empresa=$idconf_menu_empresa;
        $this->id_menu=$id_menu;
        $this->estado=$estado;
        $this->id_empresa=$id_empresa;
    }
    public function setData1($data)
    {
        $this->idconf_menu_empresa=$data['idconf_menu_empresa'];
        $this->id_menu=$data['id_menu'];
        $this->estado=$data['estado'];
        $this->id_empresa=$data['id_empresa'];
    }


    public function setIdconf_menu_empresa($idconf_menu_empresa){
        $this->idconf_menu_empresa=$idconf_menu_empresa;
    }


    public function getIdconf_menu_empresa(){
        return $this->idconf_menu_empresa;
    }

    public function setId_menu($id_menu){
        $this->id_menu=$id_menu;
    }
    
    public function getId_menu(){
        return $this->id_menu;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setId_empresa($id_empresa){
        $this->id_empresa=$id_empresa;
    }

    public function getId_empresa(){
        return $this->id_empresa;
    }

    protected function save()
    {
        $sql = MainModel::getConection()->prepare("INSERT INTO conf_menu_empresa(id_menu,estado,id_empresa) values(:IdMenu,:Estado,:IdEmpresa)");
        $sql->bindParam(":IdMenu", $this->getId_menu());
        $sql->bindParam(":Estado", $this->getEstado());
        $sql->bindParam(":IdEmpresa", $this->getId_empresa());
        $sql->execute();
        return $sql;
    }
}