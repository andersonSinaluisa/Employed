<?php

if(isset($_GET['url'])){

    $url = explode('/',$_GET['url']);

    switch ($url[0]) {
        case 'login':
            return require_once('./ajax/usuarioAjax.php');
            break;
        
            

        case 'menu':
            return require_once('./ajax/menuAjax.php');
            break; 
        default:
            # code...
            break;
    }

}