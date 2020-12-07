<?php
require_once('./core/mainModel.php');
class Sesion extends MainModel{
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

    public function save()
    {
        $statement = "INSERT INTO mov_sesion(id_usuario,token,estado,ip) values(:IdUsuario,:Token,:Estado,:Ip)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdUsuario", $this->getId_usuario());
        $sql->bindParam(":Token", $this->getToken());
        $sql->bindParam(":Estado", $this->getEstado());
        $sql->bindParam(":Ip", $this->getIp());
        $sql->execute();
        return $sql->rowCount();
    }

    public function getSesion($id_usuario,$token){
        $statement = "SELECT * FROM mov_sesion WHERE token =:Token and id_usuario=:IdUsuario";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdUsuario", $id_usuario);
        $sql->bindParam(":Token", $token);
        $sql->execute();
        return $sql; 
    }
}