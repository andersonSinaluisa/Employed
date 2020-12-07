<?php 

require_once('./core/mainModel.php');
class Menu extends MainModel{

    private $id_menu;
    private $codigo;
    private $nombre;
    private $estado;
    private $url;
    private $icono;
    private $id_modulo;



    public function __construct()
    {
        
    }

    public function setData($id_menu,$codigo,$nombre,$estado,$url,$icono,$id_modulo)
    {
        $this->id_menu=$id_menu;
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->estado=$estado;
        $this->url=$url;
        $this->icono = $icono;
        $this->id_modulo=$id_modulo;
    }

    public function setData1($data)
    {
        $this->id_menu=$data['id_menu'];
        $this->codigo=$data['codigo'];
        $this->nombre=$data['nombre'];
        $this->estado=$data['estado'];
        $this->url=$data['url'];
        $this->icono = $data['icono'];
        $this->id_modulo=$data['id_modulo'];
    }

    public function setId_menu($id_menu){
        $this->id_menu=$id_menu;
    }
    public function getId_menu(){
        return $this->id_menu;
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

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setUrl($url){
        $this->url =$url;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setIcono($icono){
        $this->icono = $icono;
    }

    public function getIcono(){
        return $this->icono;
    }

    public function setId_modulo($id_modulo){
        $this->id_modulo=$id_modulo;
    }

    public function getId_modulo(){
        return $this->id_modulo;
    }




    public function getMenus($id)
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_menu WHERE id_modulo =:Id and estado=1");
        $sql->bindParam(":Id", $id);
        $sql->execute();
        return $sql;
    }

    public function getMenuOn($id)
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_menu WHERE id_menu=$id and estado=1");
        $sql->execute();
        return $sql;
    }
}