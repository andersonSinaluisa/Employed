<?php


    require_once('./class/conf/Persona.php');
    require_once('./class/mov/Sesion.php');
    require_once('./class/conf/Usuario.php');
    require_once('./class/conf/Main.php');
    require_once('./class/mov/Sesion.php');
    require_once('./core/mainModel.php');

class UsuarioController 
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
            $result = $usuario->getLogin();
            /* si obtiene datos de la consulta */
            if ($result->rowCount() > 0) {
                /* obtiene los datos para setearlo en ek obj usuario */
                $dataUser = $result->fetch(PDO::FETCH_ASSOC);
                $usuario->setData1($dataUser);


                /* hace una consulta de persona*/
                $resultPersona = new Persona();
                $rpersona = $resultPersona->getPersona($usuario->getId_persona());

                /* si obtiene datos */
                if ($rpersona->rowCount() > 0) {
                    $rowPersona = $rpersona->fetch(PDO::FETCH_ASSOC);
                    
                    $resultPersona->setData1($rowPersona);

                    $mainconf = new Main();
                    $resultMain = $mainconf->getMain($usuario->getId_main());

                    if ($resultMain->rowCount() > 0) {
                        $rowmain = $resultMain->fetch(PDO::FETCH_ASSOC);
                        $mainconf->setData1($rowmain);

                        /*crea los datos de sesion */
                        $mainModel = new MainModel();
                        $ip = $mainModel->getIpClient();
                        $token = md5(rand());
                        $sesion = new Sesion();
                        $sesion->setData(null, $usuario->getId_usuario(), $token, 1, $ip);

                        /* guarda en la tabla de sesion */
                        $resultSesion = $sesion->save();
                        if ($resultSesion > 0) {
                            

                            $alert = [
                                'id_usuario'=>$usuario->getId_usuario(),
                                'username'=>$user,
                                'nombres'=>$resultPersona->getNombres(),
                                'apellidos'=>$resultPersona->getApellidos(),
                                'id_rol'=>$usuario->getId_rol(),
                                'token'=>$sesion->getToken(),
                                'id_persona'=>$resultPersona->getId_persona(),
                                'id_main'=>$mainconf->getId(),
                                'id_empresa'=>$mainconf->getId_empresa()

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

}
