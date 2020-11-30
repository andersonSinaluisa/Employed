<?php 


    require_once('./class/Usuario.php');
    require_once('./core/mainModel.php');

class UsuarioModel extends MainModel{

    protected function __construct()
    {
        
    }

    protected function saveUser(Usuario $data){
        /* este metodo es usado para registrar un nuevo usuario */
        $statement ="INSERT INTO conf_usuario(email,username,pass,estado,id_rol,id_persona,id_main)
        values(:Email,:Username,:Pass,:Estado,:IdRol,:IdPersona,:IdMain)";
        $sql= MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Email",$data->getEmail());
        $sql->bindParam(":Username",$data->getUsername());
        $sql->bindParam(":Pass",$data->getPass());
        $sql->bindParam(":Estado",$data->getEstado());
        $sql->bindParam(":IdRol",$data->getId_rol());
        $sql->bindParam(":IdPersona",$data->getId_persona());
        $sql->bindParam(":IdMain",$data->getId_main());
        $sql->execute();
        return $sql;
    }


    protected static function getLogin(Usuario $user){
        /* este metodo sirve para hacer la consulta de user y pass */
        $statement = "SELECT * FROM conf_usuario WHERE username=:Username and pass=:Pass and estado=1";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Username",$user->getUsername());
        $sql->bindParam(":Pass",$user->getPass());
        $sql->execute();
        return $sql;
    }

    protected function getLoginEmail(Usuario $user){
        /* este metodo sirve para hacer la consulta de email y pass */
        $statement = "SELECT * FROM conf_usuario WHERE email=:Email and pass=:Pass and estado=1";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Email",$user->getEmail());
        $sql->bindParam(":Pass",$user->getPass());
        $sql->execute();
        return $sql;
    }


    protected static function getUsernameCompare($username){
        /* este metodo sirve para comparar el nombre de usuario */
        $statement = "SELECT * FROM conf_usuario WHERE username=:User ";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":User",$username);
        $sql->execute();
        return $sql;
    }

    protected static function getEmailCompare($email){
        /* este metodo sirve para comparar el email */
        $statement = "SELECT * FROM conf_usuario WHERE email=:Email";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Email",$email);
        $sql->execute();
        return $sql;
    }

    protected function updateUsername(Usuario $user){
        /* este metodo sirve para actualizar el usuario*/
        $statement ="UPDATE conf_usuario set username=:Username Where id_usuario=:Id";
        $sql= MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Username",$user->getUsername());
        $sql->bindParam(":Id",$user->getId_usuario());
        $sql->execute();
        return $sql;
    }
    
    protected function updatePass(Usuario $user){
        /* este metodo sirve para actualizar la contraseña */
        $statement ="UPDATE conf_usuario set pass=:Pass Where id_usuario=:Id";
        $sql= MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Pass",$user->getPass());
        $sql->bindParam(":Id",$user->getId_usuario());
        $sql->execute();
        return $sql;

    }

    protected function updateEstado(Usuario $user){
        /* este metodo sirve para actualizar el estado */
        $statement ="UPDATE conf_usuario set estado=:Estado Where id_usuario=:Id";
        $sql= MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Estado",$user->getEstado());
        $sql->bindParam(":Id",$user->getId_usuario());
        $sql->execute();
        return $sql;
    }

    public function saveMainUsuario(Usuario $data){
        /* actualiza el main */
        $sql= MainModel::getConection()->prepare("UPDATE conf_usuario
        SET id_main =:IdMain WHERE id_usuario =:IdUsuario");
        $sql->bindParam(":IdMain",$data->getId_main());
        $sql->bindParam(":IdUsuario",$data->getId_usuario());
        $sql->execute();
        return $sql;
    }


}