<?php
 
class Usuario{

    private $id_usuario;
    private $email;
    private $username;
    private $pass;
    private $estado;
    private $id_rol;
    private $id_persona;
    private $id_main;

    public function __construct()
    {   
       
        
    }

    public function setData($id_usuario,$_email, $_username,$_pass,$_estado,$_id_rol,$_id_persona,$_id_main)
    {   
        $this->id_usuario=$id_usuario;
        $this->email=$_email;
        $this->username=$_username;
        $this->pass = $_pass;
        $this->estado = $_estado;
        $this->id_rol=$_id_rol;
        $this->id_persona=$_id_persona;
        $this->id_main = $_id_main;
    }

    public function setData1($data)
    {   
        $this->id_usuario=$data['id_usuario'];
        $this->email=$data['email'];
        $this->username=$data['username'];
        $this->pass = $data['pass'];
        $this->estado = $data['estado'];
        $this->id_rol=$data['id_rol'];
        $this->id_persona=$data['id_persona'];
        $this->id_main = $data['id_main'];
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario =$id_usuario;
    }

    public function getId_usuario(){
        return $this->id_usuario;
    }
    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setUsername($username){
        $this->username=$username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setPass($pass){
        $this->pass=$pass;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setId_rol($id_rol){
        $this->id_rol=$id_rol;
    }

    public function getId_rol(){
        return $this->id_rol;
    }

    public function setId_persona($id_persona){
        $this->id_persona=$id_persona;
    }

    public function getId_persona(){
        return $this->id_persona;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
    
    

}