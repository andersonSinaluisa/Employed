<?php

class DetalleFactura extends MainModel{

    private $idmov_detalle_factura;
    private $cantidad;
    private $detalle;
    private $total;
    private $iva;
    private $total_pagar;
    private $id_factura;
    private $id_main;

    public function __construct()
    {
        
    }

    public function setData($idmov_detalle_factura,$cantidad,$detalle,$total,$iva,$total_pagar,$id_factura,$id_main)
    {
        $this->idmov_detalle_factura=$idmov_detalle_factura;
        $this->cantidad=$cantidad;
        $this->detalle=$detalle;
        $this->total = $total;
        $this->iva=$iva;
        $this->total_pagar=$total_pagar;
        $this->id_factura=$id_factura;
        $this->id_main=$id_main;
        
    }
    public function setData1($data)
    {
        $this->idmov_detalle_factura=$data['idmov_detalle_factura'];
        $this->cantidad=$data['cantidad'];
        $this->detalle=$data['detalle'];
        $this->total = $data['total'];
        $this->iva=$data['iva'];
        $this->total_pagar=$data['total_pagar'];
        $this->id_factura=$data['id_factura'];
        $this->id_main=$data['id_main'];
        
    }

    public function setIdMov_detalle_factura($idmov_detalle_factura){
        $this->idmov_detalle_factura=$idmov_detalle_factura;
    }

    public function getIdMov_detalle_factura(){
        return $this->idmov_detalle_factura;
    }
    public function setCantidad($cantidad){
        $this->cantidad=$cantidad;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function setDetalle($detalle){
        $this->detalle=$detalle;
    }

    public function getDetalle(){
        return $this->detalle;
    }

    public function setTotal($total){
        $this->total=$total;
    }

    public function getTotal(){
        return $this->total;
    }


    public function setIva($iva){
        $this->iva=$iva;
    }

    public function getIva(){
        return $this->iva;
    }

    public function setTotalPagar($total_pagar){
        $this->total_pagar=$total_pagar;

    }

    public function getTotalPagar(){
        return $this->total_pagar;
    }

    public function setId_factura($id_factura){
        $this->id_factura=$id_factura;
    }

    public function getId_factura(){
        return $this->id_factura;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
    

    public function save(){
        $statement="INSERT INTO mov_detalle_factura(cantidad,detalle,total,iva,total_pagar,id_factura,id_main)
        values(:Cantidad,:Detalle,:Total,:Iva,:Id_factura,:Id_main)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Cantidad",$this->getCantidad());
        $sql->bindParam(":Detalle",$this->getDetalle());
        $sql->bindParam(":Total",$this->getTotal());
        $sql->bindParam(":Iva",$this->getIva());
        $sql->bindParam(":Id_factura",$this->getId_factura());
        $sql->bindParam(":Id_main",$this->getId_main());
        $sql->execute();
        return $sql->rowCount();
    }
   
}