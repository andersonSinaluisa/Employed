<?php


class Movimiento{

    private $idmov_movimientos;
    private $tipo;
    private $cantidad;
    private $total;
    private $id_producto;
    private $id_main;


    public function __construct()
    {
        
    }

    public function __construct1($idmov_movimientos,$tipo,$cantidad,$total,$id_producto,$id_main)
    {
        $this->idmov_movimientos=$idmov_movimientos;
        $this->tipo=$tipo;
        $this->cantidad=$cantidad;
        $this->total=$total;
        $this->id_producto=$id_producto;
        $this->id_main=$id_main;
    }

    public function __construct2($data)
    {
        $this->idmov_movimientos=$data['idmov_movimientos'];
        $this->tipo=$data['tipo'];
        $this->cantidad=$data['cantidad'];
        $this->total=$data['total'];
        $this->id_producto=$data['id_producto'];
        $this->id_main=$data['id_main'];
    }

    public function setIdmov_movimientos($idmov_movimientos){
        $this->idmov_movimientos=$idmov_movimientos;
    }

    public function getIdmov_movimientos(){
        return $this->idmov_movimientos;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }
    
    public function getCantidad(){
        return $this->cantidad;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    }

    public function getId_producto(){
        return $this->id_producto;
    }

    public function setId_main($id_main){
        $this->id_main = $id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
}