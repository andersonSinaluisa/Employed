
<?php

const SERVERURL = "http://localhost:8081/ApiCompany/";
const NAMEPROJECT='COMPANY';
const HOST='localhost';
const USER='anderson';
const PWD='root';
const PORT=3306;
const DATABASE ='employed';
const CONECTOR = 'mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8';
const SESSION ='EMPLOYEDSESSION';
//ruta para los archivos pdf
$ROOT = $_SERVER['DOCUMENT_ROOT'];
$PATH = $ROOT."/www/Administrador/res/";

define('PATH_ROOT',$PATH);
date_default_timezone_set ('America/Guayaquil'); 
define('METHOD','AES-256-CBC');
define('SECRET_KEY','$SYSTEM___MANAGMENT');
define('SECRET_IV','101712');
