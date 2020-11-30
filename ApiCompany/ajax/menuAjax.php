<?php
require_once('./controllers/menuController.php');

if(isset($_POST['token']) && isset($_POST['id_rol']) && $_POST['id_usuario']){
    $result = MenuController::getMenusEmpresaViewPages($_POST['token'],$_POST['id_rol'],$_POST['id_main'],$_POST['id_empresa']);
    echo $result;
}else if(isset($_POST['token']) && isset($_POST['id_usuario'])){
    $result = MenuController::getMenusController($_POST['token'],$_POST['id_usuario']);
    echo $result;
}else if(isset($_POST['id_empresa']) && isset($_POST['id_rol']) && isset($_POST['id_main'])){
    $result = MenuController::saveMenuEmpresaController($_POST['id_empresa'],$_POST['id_rol'],$_POST['id_main']);
    echo $result;
}