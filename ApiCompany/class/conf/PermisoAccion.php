<?php
require_once('./core/mainModel.php');

class PermisoAccion extends MainModel{
    private $idconf_permiso_accion;
    private $nombre;
    private $estado;
    private $id_rol;

    public function __construct()
    {
        
    }

    public function setData($idconf_permiso_accion,$nombre,$estado,$id_rol)
    {
        $this->idconf_permiso_accion=$idconf_permiso_accion;
        $this->nombre=$nombre;
        $this->estado=$estado;
        $this->id_rol=$id_rol;
    }
    public function setData1($data)
    {
        $this->idconf_permiso_accion=$data['idconf_permiso_accion'];
        $this->nombre=$data['nombre'];
        $this->estado=$data['estado'];
        $this->id_rol=$data['id_rol'];
    }

    public function setIdconf_permiso_accion($idconf_permiso_accion){
        $this->idconf_permiso_accion=$idconf_permiso_accion;
    }
    public function getIdconf_permiso_accion(){
        return $this->idconf_permiso_accion;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setId_rol($id_rol){
        $this->id_rol=$id_rol;
    }

    public function getId_rol(){
        return $this->id_rol;
    }

    public function save(){
        $statement = "INSERT INTO conf_permiso_accion(nombre,estado,id_rol)
        values(:Nombre,:Estado,:Id_rol)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Nombre",$this->getNombre());
        $sql->bindParam(":Estado",$this->getEstado());
        $sql->bindParam(":Id_rol",$this->getId_rol());
        $sql->execute();
        $sql->rowCount();
    }
}