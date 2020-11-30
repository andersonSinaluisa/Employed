<?php

class Area{

    private $id_area;
    private $id_genr_area;
    private $estado;
    private $id_empresa;

    public function __construct()
    {
     
    }
    public function setData($id_area,$id_genr_area,$estado,$id_empresa)
    {
        $this->id_area=$id_area;
        $this->id_genr_area=$id_genr_area;
        $this->estado=$estado;
        $this->id_empresa=$id_empresa;
    }

    public function setData1($data)
    {
        $this->id_area=$data['id_area'];
        $this->id_genr_area=$data['id_genr_area'];
        $this->estado=$data['estado'];
        $this->id_empresa=$data['id_empresa'];
    }

    public function setId_area($id_area){
        $this->id_area=$id_area;
    }
    public function getId_area(){
        return $this->id_area;
    }

    public function setId_genr_area($id_genr_area){
        $this->id_genr_area=$id_genr_area;
    }
    public function getId_genr_area(){
        return $this->id_genr_area;
    }

    public function setEstado($estado){
        $this->estado=$estado;

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

}

