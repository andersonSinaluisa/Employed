<?php
require_once('./core/mainModel.php');

class Smtp extends MainModel
{
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

    public function setData($id_smtp, $smtp, $port, $user, $pass, $encript, $id_main)
    {
        $this->id_smtp = $id_smtp;
        $this->smtp = $smtp;
        $this->port = $port;
        $this->user = $user;
        $this->pass = $pass;
        $this->encript = $encript;
        $this->id_main = $id_main;
    }
    public function setData1($data)
    {
        $this->id_smtp = $data['id_smtp'];
        $this->smtp = $data['smtp'];
        $this->port = $data['port'];
        $this->user = $data['user'];
        $this->pass = $data['pass'];
        $this->encript = $data['encript'];
        $this->id_main = $data['id_main'];
    }

    public function setId_smtp($id_smtp)
    {
        $this->id_smtp = $id_smtp;
    }

    public function getId_smtp()
    {
        return $this->id_smtp;
    }

    public function setSmtp($smtp)
    {
        $this->smtp = $smtp;
    }

    public function getSmtp()
    {
        return $this->smtp;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setEncript($encript)
    {
        $this->encript = $encript;
    }

    public function getEncript()
    {
        return $this->encript;
    }

    public function setId_main($id_main)
    {
        $this->id_main = $id_main;
    }

    public function getId_main()
    {
        return $this->id_main;
    }

    public function save()
    {
        $statement = "INSERT INTO conf_smtp(smtp,port,user,pass,encript,id_main) 
        values(:Smtp,:Port,:User,:Pass,:Encript,:Id_main)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Smtp", $this->getSmtp());
        $sql->bindParam(":Port", $this->getPort());
        $sql->bindParam(":User", $this->getUser());
        $sql->bindParam(":Pass", $this->getPass());
        $sql->bindParam(":Encript", $this->getEncript());
        $sql->bindParam(":Id_main", $this->getId_main());
        $sql->execute();
        $sql->rowCount();
    }
}
