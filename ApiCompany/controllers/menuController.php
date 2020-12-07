<?php

require_once('./core/mainModel.php');
require_once('./class/mov/Sesion.php');

class MenuController 
{
   /* public function getMenusEmpresaController()
    {
        session_start(['name' => SESSION]);

        $session = new SESSION();
        $session->setData1($_SESSION);
        $dataMenus = [];
        $resultPermisos = MenuModel::getMenuRolEmpresa($session->getId_rol(), $session->getId_main());
        if ($resultPermisos->rowCount() > 0) {
            $rowPermisos = $resultPermisos->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rowPermisos as $permiso) {

                $menu = $permiso['id_menu'];
                $result = MenuModel::getMenusEmpresa($session->getId_empresa(), $menu);
                if ($result->rowCount() > 0) {

                    $resultMenu = MenuModel::getMenuOn($menu);
                    if ($resultMenu->rowCount() > 0) {
                        $rowMenu = $resultMenu->fetch(PDO::FETCH_ASSOC);
                        $dataMenus[] = [
                            'menu' => $rowMenu['nombre'],
                            'url' => $rowMenu['url'],
                            'icono' => $rowMenu['icono']
                        ];
                    }
                }
            }
        }




        return $dataMenus;
    }

    public function getMenusEmpresaViewPages($token, $id_rol, $id_main, $id_empresa)
    {
        $dataMenus = [];

        if ($token != null || $token != '') {
            $resultPermisos = MenuModel::getMenuRolEmpresa($id_rol, $id_main);
            if ($resultPermisos->rowCount() > 0) {
                $rowPermisos = $resultPermisos->fetchAll(PDO::FETCH_ASSOC);

                foreach ($rowPermisos as $permiso) {

                    $menu = $permiso['id_menu'];
                    $result = MenuModel::getMenusEmpresa($id_empresa, $menu);
                    if ($result->rowCount() > 0) {

                        $resultMenu = MenuModel::getMenuOn($menu);
                        if ($resultMenu->rowCount() > 0) {
                            $rowMenu = $resultMenu->fetch(PDO::FETCH_ASSOC);
                            $dataMenus[] = $rowMenu['url'];
                        }
                    }
                }
            } else {
                $dataMenus = [];
            }
        } else {
            $dataMenus = [];
        }

        return json_encode($dataMenus, JSON_UNESCAPED_UNICODE);
    }*/

    public function getMenusController($token,$id_usuario)
    {
        $token = MainModel::clearString($token);
        $id_usuario=MainModel::clearString($id_usuario);
        if($token!=null || $token !='' &&  $id_usuario!=''){

            $session = new Sesion();
            $resultSesion = $session->getSesion($id_usuario,$token);
            if($resultSesion->rowCount()>0){
                $result = MenuModel::getModulosModel();
                if ($result->rowCount() > 0) {
                    $rowModulo = $result->fetchAll(PDO::FETCH_ASSOC);
                    $a = 0;
                    foreach ($rowModulo as $r) {
        
                        $menu = MenuModel::getMenus($r['id_modulo']);
                        if ($menu->rowCount() > 0) {
                            $rowMenu = $menu->fetchAll(PDO::FETCH_ASSOC);
                            $i = 0;
                            foreach ($rowMenu as $rm) {
        
                                $dataMenu[] = [
                                    'id_menu' => $rm['id_menu'],
                                    'menu' => $rm['nombre'],
                                    'icono' => $rm['icono'],
                                    'url' => $rm['url']
        
                                ];
                                $i++;
                            }
                        } else {
                            return null;
                        }
                        $dataModulos[$a] = [
                            'nombre' => $r['nombre'],
                            $dataMenu
                        ];
                        $a++;
                        $dataMenu = [];
                    }
                }
            }else{
                $dataModulos = [
                    'msj'=>'error'
                ];

            }
        }else{
            $dataModulos = [
                'msj'=>'Campos vacios'
            ];
        }
       
        return json_encode($dataModulos,JSON_UNESCAPED_UNICODE);
    }

/*
    public function getMenuConf()
    {
        $value = false;
        if (isset($_SESSION['token']) && isset($_SESSION['id_empresa'])) {

            if (isset($_SESSION['id_rol'])) {
                $rol = $_SESSION['id_rol'];
                $result = MainModel::get("SELECT * FROM conf_rol WHERE id_rol=$rol");
                if ($result->rowCount() > 0) {
                    $rolrow = $result->fetch(PDO::FETCH_ASSOC);
                    if ($rolrow['rol'] == 'empresa') {
                        $id_empresa = $_SESSION['id_empresa'];
                        $resultMenu = MainModel::get("SELECT * FROM conf_main WHERE id_empresa=$id_empresa");
                        if ($resultMenu->rowCount() > 0) {
                            $row = $resultMenu->fetch(PDO::FETCH_ASSOC);
                            if ($row['menu_select'] > 0) {
                                $value = true;
                            } else {
                                $value = false;
                            }
                        } else {
                            $value = false;
                        }
                    }
                }
            } else {
                $value = true;
            }
        } else {
            $value = true;
        }
        return $value;
    }

    public function saveMenuEmpresaController($id_empresa,$id_rol,$id_main)
    {

 
        if (isset($_POST['menus'])) {
            $menu = $_POST['menus'];
            if (sizeof($menu) > 0) {

                for ($i = 0; $i <= count($menu) - 1; $i++) {
                    $id = $menu[$i];
                    $result = MenuModel::getMenuOn($id);
                    if ($result->rowCount() > 0) {
                        $rowMenu = $result->fetch(PDO::FETCH_ASSOC);
                        $menuObj = new Menu();
                        $menuObj->setData1($rowMenu);

                        $menuEmpresa = new MenuEmpresa();
                        $menuEmpresa->setData(null, $menuObj->getId_menu(), $menuObj->getEstado(), $id_empresa);
                        $permisoMenu = new PermisoMenu();
                        $permisoMenu->setData(null, $menuObj->getId_menu(), $id_rol, $id_main);

                        $resultSave = MenuModel::saveMenuEmpresa($menuEmpresa);
                        $resultSaveRolMenu = MenuModel::saveEmpresaRolAdmin($permisoMenu);
                        if ($resultSave->rowCount() > 0 && $resultSaveRolMenu->rowCount() > 0) {
                            $val = true;
                        } else {
                            $val = false;
                            $alert = [
                                'class' => 'danger',
                                'msj' => 'error al guardar menu '

                            ];
                        }
                    } else {
                        $alert = [
                            'class' => 'danger',
                            'msj' => 'menu no encontrado'
                        ];
                    }
                }
            } else {
                $alert = [
                    'class' => 'danger',
                    'msj' => 'selecciona al menos un menu'
                ];
            }
        } else {
            $alert = [
                'class' => 'danger',
                'msj' => 'selecciona al menos un menu'
            ];
        }

        if ($val) {
            $conf_main = new ConfMainModel();

            $resultMain = $conf_main->updateMainSelect(1, $id_main);
            if ($resultMain->rowCount() > 0) {
                $alert = [
                    'class' => 'success',
                    'msj' => 'Guardado'
                ];
            
            } else {
                $alert = [
                    'class' => 'danger',
                    'msj' => 'Error'
                ];
            }
        }


        return MainModel::MsjAlert($alert);
    }



    public function getPaises()
    {
        $data = json_decode(file_get_contents(SERVERURL . 'core/paises.json'), true);
        $row = [];
        for ($i = 0; $i <= sizeof($data) - 1; $i++) {
            $nombre = $data[$i]['name'];
            $cod = $data[$i]['alpha2Code'];
            $row[$i] = ['nombre' => $nombre, 'cod' => $cod];
        }
        $convert = json_encode($row, JSON_UNESCAPED_UNICODE);

        return $convert;
    }


    public function getAreas()
    {
        session_start(['name' => SESSION]);
        if (isset($_SESSION['token'])) {
            $result = MainModel::get("SELECT * FROM genr_general WHERE tipo='TIA'");
            if ($result->rowCount() > 0) {
                $array = [];
                $row = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($row as $r) {
                    $array[] = [
                        'id' => $r['idgenr_general'],
                        'des' => $r['nombre']
                    ];
                }
            } else {
                $array = null;
            }
        } else {
            $array = null;
        }

        return $array;
    }*/
}
