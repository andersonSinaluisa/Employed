<?php



    require_once('./class/SESSION.php');
    require_once('./class/Sesion.php');
    require_once('./core/mainModel.php');


class SesionModel extends MainModel
{

    public function __construct()
    {
    }

    public function saveSesion(Sesion $sesion)
    {
        $statement = "INSERT INTO mov_sesion(id_usuario,token,estado,ip) values(:IdUsuario,:Token,:Estado,:Ip)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdUsuario", $sesion->getId_usuario());
        $sql->bindParam(":Token", $sesion->getToken());
        $sql->bindParam(":Estado", $sesion->getEstado());
        $sql->bindParam(":Ip", $sesion->getIp());
        $sql->execute();
        return $sql;
    }


    public function getSesion($id_usuario,$token){
        $statement = "SELECT * FROM mov_sesion WHERE token =:Token and id_usuario=:IdUsuario";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdUsuario", $id_usuario);
        $sql->bindParam(":Token", $token);
        $sql->execute();
        return $sql; 
    }
    public function saveSessionPage(SESSION $sesion)
    {
        session_start(['name' => SESSION]);
        $_SESSION['id_persona']=$sesion->getId_persona();
        $_SESSION['id_usuario'] = $sesion->getId_Usuario();
        $_SESSION['id_empresa'] = $sesion->getId_empresa();
        $_SESSION['id_rol'] = $sesion->getId_rol();
        $_SESSION['id_tipo_usuario'] = $sesion->getId_tipo_usuario();
        $_SESSION['token'] = $sesion->getToken();
        $_SESSION['id_main'] = $sesion->getId_main();
        $_SESSION['data_personal_complete'] = $sesion->getData_personal_complete();
        $_SESSION['data_company_complete'] = $sesion->getData_company_complete();
        $_SESSION['data_user_complete'] = $sesion->getData_user_complete();
        $_SESSION['data_menu_complete'] = $sesion->getData_menu_complete();
    }

}
