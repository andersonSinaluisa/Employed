<?php

class Main{


    private $id;
    private $codigo;
    private $id_empresa;
    private $estado;
    private $menu_select;
    private $areas_empresa;

    public function __construct()
    {
        
    }


    public function setData($id,$codigo,$id_empresa,$estado,$menu_select,$areas_empresa)
    {
        $this->id=$id;
        $this->codigo=$codigo;
        $this->id_empresa=$id_empresa;
        $this->estado=$estado;
        $this->menu_select=$menu_select;
        $this->areas_empresa=$areas_empresa;

    }

    public function setData1($data)
    {
        $this->id=$data['id'];
        $this->codigo=$data['codigo'];
        $this->id_empresa=$data['id_empresa'];
        $this->estado=$data['estado'];
        $this->menu_select=$data['menu_select'];
        $this->areas_empresa=$data['areas_empresa'];

    }



    public function setId($id){
        $this->id = $id;
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

    public function setId_empresa($id_empresa){
        $this->id_empresa=$id_empresa;
    }

    public function getId_empresa(){
        return $this->id_empresa;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setMenu_select($menu_select){
        $this->menu_select=$menu_select;
    }

    public function getMenu_select(){
        return $this->menu_select;
    }

    public function setAreas_empresa($areas_empresa){
        $this->areas_empresa=$areas_empresa;
    }

    public function getAreas_empresa(){
        return $this->areas_empresa;
    }

}