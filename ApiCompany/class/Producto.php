<?php

class Producto{
    
    private $id_producto;
    private $codigo;
    private $nombre;
    private $precio;
    private $iva;
    private $total;
    private $estado;
    private $url_img;
    private $id_main;

    public function __construct($id_producto,$codigo,$nombre,$precio,$iva,$total,$estado,$url_img,$id_main)
    {
        $this->id_producto=$id_producto;
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->iva=$iva;
        $this->total=$total;
        $this->estado=$estado;
        $this->url_img=$url_img;
        $this->id_main=$id_main;
    }


    public function setId_producto($id_producto){
        $this->id_producto=$id_producto;
    }

    public function getId_producto(){
        return $this->id_producto;
    }


    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setPrecio($precio){
        $this->precio=$precio;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setIva($iva){
        $this->iva=$iva;
    }

    public function getIva(){
        return $this->iva;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setEstado(){
        $this->estado;
    }


    public function getEstado(){
        return $this->estado;
    }


    public function setUrl_img($url_img){
        $this->url_img=$url_img;
    }

    public function getUrl_img(){
        return $this->url_img;
    }

    public function setId_main($id_main){
         $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }



    
}