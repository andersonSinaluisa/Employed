<?php

class Sesion{
    private $idmov_sesion;
    private $id_usuario;
    private $token;
    private $estado;
    private $ip;

    public function __construct()
    {
        
    }

    public function setData($idmov_sesion,$id_usuario,$token,$estado,$ip){
        $this->idmov_sesion=$idmov_sesion;
        $this->id_usuario=$id_usuario;
        $this->estado=$estado;
        $this->token=$token;
        $this->ip=$ip;
    }

    public function setData1($data){
        $this->idmov_sesion=$data['idmov_sesion'];
        $this->id_usuario=$data['id_usuario'];
        $this->estado=$data['estado'];
        $this->token=$data['token'];
        $this->ip=$data['ip'];
    }

    public function setIdmov_sesion($idmov_sesion){
        $this->idmov_sesion=$idmov_sesion;
    }

    public function getIdmov_sesion(){
        return $this->idmov_sesion;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setToken($token){
        $this->token=$token;
    }

    public function getToken(){
        return $this->token;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setIp($ip){
        $this->ip=$ip;
    }

    public function getIp(){
        return $this->ip;
    }
}