<?php

class Factura{


    private $idmov_factura;
    private $codigo;
    private $autorizacion;
    private $id_cliente;
    private $fecha;
    private $id_detalle_factura;
    private $total;
    private $forma_pago;
    private $tipo;
    private $id_main;




    public function __construct()
    {
        
    }

    public function __construct1($idmov_factura,$codigo,$autorizacion,$id_cliente,$fecha,$id_detalle_factura,
    $total,$forma_pago,$tipo,$id_main)
    {
        $this->idmov_factura=$idmov_factura;
        $this->codigo=$codigo;
        $this->autorizacion=$autorizacion;
        $this->id_cliente=$id_cliente;
        $this->fecha=$fecha;
        $this->id_detalle_factura=$id_detalle_factura;
        $this->total=$total;
        $this->forma_pago=$forma_pago;
        $this->tipo=$tipo;
        $this->id_main = $id_main;

    }
    public function __construct2($data)
    {
        $this->idmov_factura=$data['idmov_factura'];
        $this->codigo=$data['codigo'];
        $this->autorizacion=$data['autorizacion'];
        $this->id_cliente=$data['id_cliente'];
        $this->fecha=$data['fecha'];
        $this->id_detalle_factura=$data['id_detalle_factura'];
        $this->total=$data['total'];
        $this->forma_pago=$data['forma_pago'];
        $this->tipo=$data['tipo'];
        $this->id_main = $data['id_main'];

    }


    public function setIdmov_factura($idmov_factura){
        $this->idmov_factura=$idmov_factura;
    }

    public function getIdmov_factura(){
        return $this->idmov_factura;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setAutorizacion($autorizacion){
        $this->autorizacion=$autorizacion;
    }

    public function getAutorizacion(){
        return $this->autorizacion;
    }

    public function setId_cliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }

    public function getId_cliente(){
        return $this->id_cliente;
    }

    public function setFecha($fecha){
        $this->fecha=$fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function setId_detalle_factura($id_detalle_factura){
        $this->id_detalle_factura=$id_detalle_factura;
    } 

    public function getId_detalle_factura(){
        return $this->id_detalle_factura;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getTotal(){
        return $this->total;
    }

    public function setForma_pago($forma_pago){
        $this->forma_pago=$forma_pago;
    }

    public function getForma_pago(){
        return $this->forma_pago;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
   
}