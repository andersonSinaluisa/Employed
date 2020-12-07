<?php
require_once('./core/mainModel.php');

class Persona extends MainModel
{

    private $id_persona;
    private $nombres;
    private $apellidos;
    private $genero;
    private $identificacion;
    private $pais;
    private $ciudad;
    private $telefono;
    private $direccion;
    private $codigo_postal;
    private $tipo_persona;
    private $img_url;




    public function __construct()
    {
    }

    public function setData(
        $id_persona,
        $nombres,
        $apellidos,
        $genero,
        $identificacion,
        $pais,
        $ciudad,
        $telefono,
        $direccion,
        $codigo_postal,
        $tipo_persona,
        $img_url
    ) {
        $this->id_persona = $id_persona;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->genero = $genero;
        $this->identificacion = $identificacion;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->codigo_postal = $codigo_postal;
        $this->tipo_persona = $tipo_persona;
        $this->img_url = $img_url;
    }

    public function setData1($data)
    {
        $this->id_persona = $data['id_persona'];
        $this->nombres = $data['nombres'];
        $this->apellidos = $data['apellidos'];
        $this->genero = $data['genero'];
        $this->identificacion = $data['identificacion'];
        $this->pais = $data['pais'];
        $this->ciudad = $data['ciudad'];
        $this->telefono = $data['telefono'];
        $this->direccion = $data['direccion'];
        $this->codigo_postal = $data['codigo_postal'];
        $this->tipo_persona = $data['tipo_persona'];
        $this->img_url = $data['img_url'];
    }

    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }
    public function getNombres()
    {
        return $this->nombres;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setIdenticacion($identificacion)
    {
        $this->identificacion = $identificacion;
    }
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }
    public function getPais()
    {
        return $this->pais;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setCodigo_posta($codigo_postal)
    {
        $this->codigo_postal = $codigo_postal;
    }
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    public function setTipo_persona($tipo_persona)
    {
        $this->tipo_persona = $tipo_persona;
    }

    public function getTipo_persona()
    {
        return $this->tipo_persona;
    }

    public function setImg_url($img_url)
    {
        $this->img_url = $img_url;
    }
    public function getImg_url()
    {
        return $this->img_url;
    }

    public function setId_persona($id_persona)
    {
        $this->id_persona = $id_persona;
    }
    public function getId_persona()
    {
        return $this->id_persona;
    }


    public function save()
    {
        $statement = "INSERT INTO mant_persona(nombres, apellidos,genero,identificacion,pais,
        ciudad,telefono,direccion,codigo_postal,tipo_persona,img_url) values(:Nombres,:Apellidos,:Genero,
        :Identificacion,:Pais,:Ciudad,:Telefono,:Direccion,:CodigoPostal,:TipoPersona,:ImgUrl)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Nombres", $this->getNombres());
        $sql->bindParam(":Apellidos", $this->getApellidos());
        $sql->bindParam(":Genero", $this->getGenero());
        $sql->bindParam(":Identificacion", $this->getIdentificacion());
        $sql->bindParam(":Pais", $this->getPais());
        $sql->bindParam(":Ciudad", $this->getCiudad());
        $sql->bindParam(":Telefono", $this->getTelefono());
        $sql->bindParam(":Direccion", $this->getDireccion());
        $sql->bindParam(":CodigoPostal", $this->getCodigoPostal());
        $sql->bindParam(":TipoPersona", $this->getTipo_persona());
        $sql->bindParam(":ImgUrl", $this->getImg_url());
        $sql->execute();
        return $sql;
    }

    public function getPersona($id_persona){
        $statement="SELECT * FROM mant_persona WHERE id_persona=:IdPersona";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdPersona",$id_persona);
        $sql->execute();
        return $sql;
    }

}
