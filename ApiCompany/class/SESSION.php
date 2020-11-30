<?php

class SESSION{

    private $id_persona;
    private $id_usuario;
    private $id_empresa;
    private $id_rol;
    private $id_tipo_usuario;
    private $token;
    private $id_main;
    private $data_personal_complete;
    private $data_company_complete;
    private $data_user_complete;
    private $data_menu_complete;

    public function __construct()
    {
        
    }


    public function setData($id_persona,$id_usuario,$id_empresa,$id_rol,$id_tipo_usuario,$token,$id_main,$data_personal_complete,
    $data_company_complete,$data_user_complete,$data_menu_complete){

        $this->id_persona=$id_persona;
        $this->id_usuario=$id_usuario;
        $this->id_empresa=$id_empresa;
        $this->id_rol=$id_rol;
        $this->id_tipo_usuario=$id_tipo_usuario;
        $this->token=$token;
        $this->id_main=$id_main;
        $this->data_personal_complete=$data_personal_complete;
        $this->data_company_complete=$data_company_complete;
        $this->data_user_complete=$data_user_complete;
        $this->data_menu_complete=$data_menu_complete;
    }

    public function setData1($data){

        $this->id_persona=$data['id_persona'];
        $this->id_usuario=$data['id_usuario'];
        $this->id_empresa=$data['id_empresa'];
        $this->id_rol=$data['id_rol'];
        $this->id_tipo_usuario=$data['id_tipo_usuario'];
        $this->token=$data['token'];
        $this->id_main=$data['id_main'];
        $this->data_personal_complete=$data['data_personal_complete'];
        $this->data_company_complete=$data['data_company_complete'];
        $this->data_user_complete=$data['data_user_complete'];
        $this->data_menu_complete=$data['data_menu_complete'];
    }

    public function setId_persona($id_persona){
        $this->id_persona=$id_persona;
    }

    public function getId_persona(){
        return $this->id_persona;
    }

    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }

    public function getId_Usuario(){
        return $this->id_usuario;
    }

    public function setId_empresa($id_empresa){
        $this->id_empresa=$id_empresa;
    }

    public function getId_empresa(){
        return $this->id_empresa;
    }

    public function setId_rol($id_rol){
        $this->id_rol=$id_rol;
    }

    public function getId_rol(){
        return $this->id_rol;
    }

    public function setId_tipo_usuario($id_tipo_usuario){
        $this->id_tipo_usuario=$id_tipo_usuario;
    }

    public function getId_tipo_usuario(){
        return $this->id_tipo_usuario;
    }

    public function setToken($token){
        $this->token=$token;
    }

    public function getToken(){
        return $this->token;
    }

    public function setId_main($id_main){
        $this->id_main=$id_main;
    }

    public function getId_main(){
        return $this->id_main;
    }
    public function setData_personal_complete($data_personal_complete){
        $this->data_personal_complete=$data_personal_complete;
    }

    public function getData_personal_complete(){
        return $this->data_personal_complete;
    }

    public function setData_company_complete($data_company_complete){
        $this->data_company_complete=$data_company_complete;
    }

    public function getData_company_complete(){
        return $this->data_company_complete;
    }

    public function setData_user_complete($data_user_complete){
        $this->data_user_complete=$data_user_complete;
    }

    public function getData_user_complete(){
        return $this->data_user_complete;
    }

    public function setData_menu_complete($data_menu_complete){
        $this->data_menu_complete=$data_menu_complete;
    }
    public function getData_menu_complete(){
        return $this->data_menu_complete;
    }
}