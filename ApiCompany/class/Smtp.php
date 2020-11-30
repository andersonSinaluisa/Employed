<?php

class Smtp{
    private $id_smtp;
    private $smtp;
    private $port;
    private $user;
    private $pass;
    private  $encript;
    private $id_main;

    

    public function __construct()
    {
        
    }

    public function __construct1($id_smtp,$smtp,$port,$user,$pass,$encript,$id_main)
    {
        $this->id_smtp=$id_smtp;
        $this->smtp=$smtp;
        $this->port=$port;
        $this->user=$user;
        $this->pass = $pass;
        $this->encript=$encript;
        $this->id_main=$id_main;
        
    }
    public function __construct2($data)
    {
        $this->id_smtp=$data['id_smtp'];
        $this->smtp=$data['smtp'];
        $this->port=$data['port'];
        $this->user=$data['user'];
        $this->pass = $data['pass'];
        $this->encript=$data['encript'];
        $this->id_main=$data['id_main'];
        
    }

    public function setId_smtp($id_smtp){
        $this->id_smtp=$id_smtp;
    }

    public function getId_smtp(){
        return $this->id_smtp;
    }

    public function setSmtp($smtp){
        $this->smtp=$smtp;
    }

    public function getSmtp(){
        return $this->smtp;
    }

    public function setPort($port){
        $this->port=$port;
    }

    public function getPort(){
        return $this->port;
    }

    public function setUser($user){
        $this->user=$user;
    }

    public function getUser(){
        return $this->user;
    }

    public function setPass($pass){
        $this->pass=$pass;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setSsl($encript){
        $this->encript=$encript;
    }

    public function getSsl(){
        return $this->encript;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
}