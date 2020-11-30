<?php

    require_once('./class/Persona.php');
    require_once('./core/mainModel.php');


class PersonaModel extends MainModel
{

    public function __construct()
    {
    }

    public  static function savePersonaModel(Persona $persona)
    {
        $statement = "INSERT INTO mant_persona(nombres, apellidos,genero,identificacion,pais,
        ciudad,telefono,direccion,codigo_postal,tipo_persona,img_url) values(:Nombres,:Apellidos,:Genero,
        :Identificacion,:Pais,:Ciudad,:Telefono,:Direccion,:CodigoPostal,:TipoPersona,:ImgUrl)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Nombres", $persona->getNombres());
        $sql->bindParam(":Apellidos", $persona->getApellidos());
        $sql->bindParam(":Genero", $persona->getGenero());
        $sql->bindParam(":Identificacion", $persona->getIdentificacion());
        $sql->bindParam(":Pais", $persona->getPais());
        $sql->bindParam(":Ciudad", $persona->getCiudad());
        $sql->bindParam(":Telefono", $persona->getTelefono());
        $sql->bindParam(":Direccion", $persona->getDireccion());
        $sql->bindParam(":CodigoPostal", $persona->getCodigoPostal());
        $sql->bindParam(":TipoPersona", $persona->getTipo_persona());
        $sql->bindParam(":ImgUrl", $persona->getImg_url());
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

    public static function getPersonaIdentificacion($identificacion){
        $statement="SELECT * FROM mant_persona WHERE identificacion=:Identificacion";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Identificacion",$identificacion);
        $sql->execute();
        return $sql;
    }
}
