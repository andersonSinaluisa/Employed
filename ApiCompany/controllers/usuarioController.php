<?php


    require_once('./models/confMainModel.php');
    require_once('./class/Persona.php');
    require_once('./models/personaModel.php');
    require_once('./models/sesionModel.php');
    require_once('./class/Sesion.php');
    require_once('./class/Usuario.php');
    require_once('./models/usuarioModel.php');


class UsuarioController extends UsuarioModel
{


    public function __construct()
    {
    }

    public function login($user, $pass)
    {

        $user = MainModel::clearString($user);
        $pass = MainModel::clearString($pass);
        $pass = MainModel::encryption($pass);

        /* comprueba los que los datos no esten vacíos */
        if ($user != '' && $pass != '') {

            /* crea un obj usuario para hacer consulta */
            $usuario = new Usuario();
            $usuario->setData(null, $user, $user, $pass, null, null, null, null);
            $result = UsuarioModel::getLogin($usuario);
            /* si obtiene datos de la consulta */
            if ($result->rowCount() > 0) {
                /* obtiene los datos para setearlo en ek obj usuario */
                $dataUser = $result->fetch(PDO::FETCH_ASSOC);
                $usuario->setData1($dataUser);


                /* hace una consulta de persona*/
                $resultPersona = new PersonaModel();
                $rpersona = $resultPersona->getPersona($usuario->getId_persona());

                /* si obtiene datos */
                if ($rpersona->rowCount() > 0) {
                    $rowPersona = $rpersona->fetch(PDO::FETCH_ASSOC);
                    $persona = new Persona();
                    $persona->setData1($rowPersona);

                    $mainconf = new ConfMainModel();
                    $resultMain = $mainconf->getMain($usuario->getId_main());

                    if ($resultMain->rowCount() > 0) {
                        $rowmain = $resultMain->fetch(PDO::FETCH_ASSOC);
                        $main = new Main();
                        $main->setData1($rowmain);

                        /*crea los datos de sesion */
                        $token = md5(rand());
                        $sesion = new Sesion();
                        $sesion->setData(null, $usuario->getId_usuario(), $token, 1, MainModel::getIp());

                        /* guarda en la tabla de sesion */
                        $saveSesion = new SesionModel();
                        $resultSesion = $saveSesion->saveSesion($sesion);
                        if ($resultSesion->rowCount() > 0) {
                            

                            $alert = [
                                'id_usuario'=>$usuario->getId_usuario(),
                                'username'=>$user,
                                'nombres'=>$persona->getNombres(),
                                'apellidos'=>$persona->getApellidos(),
                                'id_rol'=>$usuario->getId_rol(),
                                'token'=>$sesion->getToken(),
                                'id_persona'=>$persona->getId_persona(),
                                'id_main'=>$main->getId(),
                                'id_empresa'=>$main->getId_empresa()

                            ];
                        } else {
                            $alert = ['class' => 'danger', 'msj' => 'Error al iniciar Sesion'];
                        }
                    } else {
                        $alert = ['class' => 'danger', 'msj' => 'Error al iniciar Main'];
                    }
                } else {
                    $alert = ['class' => 'danger', 'msj' => 'Error al iniciar Persona'];
                }
            } else {
                $alert = ['class' => 'danger', 'msj' => 'Usuario y/o contraseña incorrecta'];
            }
        } else {
            $alert = ['class' => 'danger', 'msj' => 'Completa todos los campos'];
        }

        return json_encode($alert,JSON_UNESCAPED_UNICODE);
    }


    public function saveUsuario($user, $email, $pass1, $pass2, $id_persona)
    {
        $user = MainModel::clearString($user);
        $pass1 = MainModel::clearString($pass1);
        $pass2 = MainModel::clearString($pass2);
        
        if ($user != '' && $pass1 != '' && $pass2 != '') {

            $resultUsername = UsuarioModel::getUsernameCompare($user);
            if ($resultUsername->rowCount() == 0) {
                $resultEmail = UsuarioModel::getEmailCompare($email);
                if ($resultEmail->rowCount() == 0) {
                    if ($pass1 == $pass2) {
                        $pass1 = MainModel::encryption($pass1);
                            $usuario = new Usuario();
                            $usuario->setData(null, $email, $user, $pass1, 1, 1, $id_persona, null);
                            $saveUser = UsuarioModel::saveUser($usuario);
                            if ($saveUser->rowCount() > 0) {
                                $resultLogin = UsuarioModel::getLogin($usuario);
                                $token=md5(rand(rand(rand(rand(rand(rand()))))));
                                if($resultLogin->rowCount()>0){
                                    $rowLogin = $resultLogin->fetch(PDO::FETCH_ASSOC);
                                    $usuario->setData1($rowLogin);
                                    $SESSION = new SESSION();
                                    $SESSION->setData1($_SESSION);
                                    $SESSION->setId_usuario($usuario->getId_usuario());
                                    $SESSION->setToken($token);
                                    $SESSION->setId_rol(1);
                                    $SESSION->setData_company_complete(false);
                                    $SESSION->setData_personal_complete(true);
                                    $SESSION->setData_menu_complete(false);
                                    $SESSION->setData_user_complete(true);
                                    
                                    SesionModel::saveSessionPage($SESSION);
                                    $alert = [
                                        'id_usuario'=>$usuario->getId_usuario(),
                                        'id_persona'=>$usuario->getId_persona(),
                                        'id_rol'=>$usuario->getId_main(),
                                        
                                    ];
                                }
                               
                            } else {
                                $alert = ['class' => 'danger', 'msj' => 'Error al crear credenciales'];
                            }
                       
                    } else {
                        $alert = ['class' => 'danger', 'msj' => 'Las contraseñas no coinciden'];
                    }
                } else {
                    $alert = ['class' => 'danger', 'msj' => 'este correo no está disponible'];
                }
            } else {
                $alert = ['class' => 'danger', 'msj' => 'este usuario no está disponible'];
            }
        } else {
            $alert = ['class' => 'danger', 'msj' => 'este usuario no está disponible'];
        }

        return json_encode($alert,JSON_UNESCAPED_UNICODE);
    }
}
