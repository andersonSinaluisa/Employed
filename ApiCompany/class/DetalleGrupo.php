<?php

class DetalleGrupo{

    private $id_detalle_grupo;
    private $id_empleado;
    private $id_grupo;

    public function __construct()
    {
        
    }

    public function __construct1($id_detalle_grupo,$id_empleado,$id_grupo)
    {
        
        $this->id_detalle_grupo=$id_detalle_grupo;
        $this->id_empleado=$id_empleado;
        $this->id_grupo=$id_grupo;
    }

    public function __construct2($data)
    {
        
        $this->id_detalle_grupo=$data['id_detalle_grupo'];
        $this->id_empleado=$data['id_empleado'];
        $this->id_grupo=$data['id_grupo'];
    }

    public function setId_detaller_grupo($id_detalle_grupo){
     $this->id_detalle_grupo=$id_detalle_grupo;
    }

    public function getId_detalle_grupo(){
        return $this->id_detalle_grupo;
    }

    public function setId_empleado($id_empleado){
        $this->id_empleado=$id_empleado;
    }

    public function getId_empleado(){
        return $this->id_empleado;
    }

    public function setId_grupo($id_grupo){
        $this->id_grupo=$id_grupo;
    }

    public function getId_grupo(){
        return $this->id_grupo;
    }



    /* PEDIR LA FOTO DEL CARNET DE JAZMIN */
}