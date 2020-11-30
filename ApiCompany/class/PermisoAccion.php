<?php

class PermisoAccion{
    private $idconf_permiso_accion;
    private $nombre;
    private $estado;
    private $id_rol;

    public function __construct()
    {
        
    }

    public function __construct1($idconf_permiso_accion,$nombre,$estado,$id_rol)
    {
        $this->idconf_permiso_accion=$idconf_permiso_accion;
        $this->nombre=$nombre;
        $this->estado=$estado;
        $this->id_rol=$id_rol;
    }
    public function __construct2($data)
    {
        $this->idconf_permiso_accion=$data['idconf_permiso_accion'];
        $this->nombre=$data['nombre'];
        $this->estado=$data['estado'];
        $this->id_rol=$data['id_rol'];
    }
}