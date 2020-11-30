<?php
require_once('./controllers/usuarioController.php');

if(isset($_POST['username']) && isset($_POST['password'])){
    $result = UsuarioController::login($_POST['username'],$_POST['password']);
    echo $result;
}else if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['pass1'])){
    $result = UsuarioController::saveUsuario($_POST['username'],$_POST['email'],$_POST['pass1'],$_POST['pass2'],$_POST['id_persona']);
    echo $result;
}else{
    echo 'hola';
}