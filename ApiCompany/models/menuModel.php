<?php

    require_once('./class/MenuEmpresa.php');
    require_once('./class/PermisoMenu.php');
    require_once('./core/mainModel.php');


class MenuModel extends MainModel
{


    protected function getModulosModel()
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_modulos WHERE estado=1");
        $sql->execute();
        return $sql;
    }

    protected function getMenus($id)
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_menu WHERE id_modulo =:Id and estado=1");
        $sql->bindParam(":Id", $id);
        $sql->execute();
        return $sql;
    }

    protected function getMenusEmpresa($id_empresa, $id_menu)
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_menu_empresa WHERE id_empresa=$id_empresa and estado=1 and id_menu=$id_menu");
        $sql->execute();
        return $sql;
    }

    protected function getMenuRolEmpresa($id_rol, $id_main)
    {
        $statement = "SELECT * FROM conf_permiso_menu WHERE id_rol=:IdRol and id_main=:IdMain";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdRol",$id_rol);
        $sql->bindParam(":IdMain",$id_main);
        $sql->execute();
        return $sql;
    }


    protected function getMenuOn($id)
    {
        $sql = MainModel::getConection()->prepare("SELECT * FROM conf_menu WHERE id_menu=$id and estado=1");
        $sql->execute();
        return $sql;
    }


    protected function saveMenuEmpresa(MenuEmpresa $data)
    {
        $sql = MainModel::getConection()->prepare("INSERT INTO conf_menu_empresa(id_menu,estado,id_empresa) values(:IdMenu,:Estado,:IdEmpresa)");
        $sql->bindParam(":IdMenu", $data->getId_menu());
        $sql->bindParam(":Estado", $data->getEstado());
        $sql->bindParam(":IdEmpresa", $data->getId_empresa());
        $sql->execute();
        return $sql;
    }

    protected function saveEmpresaRolAdmin(PermisoMenu $data)
    {
        $statement ="INSERT INTO conf_permiso_menu(id_menu,id_rol,id_main)values(:IdMenu,:IdRol,:IdMain)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":IdMenu", $data->getId_menu());
        $sql->bindParam(":IdRol", $data->getId_rol());
        $sql->bindParam(":IdMain", $data->getId_main());
        $sql->execute();
        return $sql;
    }
}
