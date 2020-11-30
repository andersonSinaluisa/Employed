<?php

    require_once('./core/config.php');
    require_once('./core/ValidarIdentificacion.php');

class MainModel {
    


    public function getSymbolExp(){
       return $dataSymbol=[
            '<script>',
            '</script>',
            '</script src',
            '</script type',
            'SELECT * FROM',
            'DELETE FROM',
            'INSERT INTO',
            '----',
            '---',
            '--',
            '==',
            '[',
            ']',
            '^',
            '=',
            ':',
            '\n',
            '"',
            '\\',
            '/',
            '+',
            '^',
            '{',
            '}',
            '||',
            '&&',
            '&',
            '|',
            "'",
            "\r"
        
        ];
    }

    public function __construct()
    {
        

    }

    protected static function getConection(){
        try {
            $link = new PDO(CONECTOR, USER, PWD);
            return $link;
          } catch (PDOException $e) {
            $alert = ['class' => 'danger', 'msj' => 'No se pudó conectar a la base de datos'];
            echo json_encode($alert,JSON_UNESCAPED_UNICODE);
            exit();
          }
    }

    public function get($sql){
        $result = self::getConection()->prepare($sql);
        
        $result->execute();
        return $result;

    }


    

    public static function MsjAlert($alert){
        return "  <div class='sufee-alert alert with-close alert-".$alert['class']." alert-dismissible fade show'>
     "
        .$alert['msj'].
        "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";

    }

    public static function InputAlert($data,$class){
        $string="";

        if(!is_array($data)){
            if($data=='*'){
                $string .= "$('.form-control').addClass('".$class."');";
            }
        }else{

            for($i=0;$i<sizeof($data);$i++){
                $string .= "$('#".$data[$i]."').addClass('".$class."');";
            }
        }
       

        return '<script>'.$string.' </script>';
    }
    
    public static function redirect($url){
        return '<script>window.location.href="'.SERVERURL.$url.'"</script>';
    }
    public static function clearString($value)
    {
      $value = trim($value);
      $value = stripslashes($value);
      $value = str_ireplace('<script>', '', $value);
      $value = str_ireplace('</script>', '', $value);
      $value = str_ireplace('</script src', '', $value);
      $value = str_ireplace('</script type', '', $value);
      $value = str_ireplace('SELECT * FROM', '', $value);
      $value = str_ireplace('DELETE FROM', '', $value);
      $value = str_ireplace('INSERT INTO', '', $value);
      $value = str_ireplace('----', '', $value);
      $value = str_ireplace('---', '', $value);
      $value = str_ireplace('--', '', $value);
      $value = str_ireplace('==', '', $value);
      $value = str_ireplace('[', '', $value);
      $value = str_ireplace(']', '', $value);
      $value = str_ireplace('^', '', $value);
      $value = str_ireplace('=', '', $value);
      $value = str_ireplace(':', '', $value);
      $value = str_ireplace('\n', '', $value);
      $value = str_ireplace('"', '', $value);
      $value = str_ireplace('\\', '', $value);
      $value = str_ireplace('/', '', $value);
      $value = str_ireplace('+', '', $value);
      $value = str_ireplace('^', '', $value);
      $value = str_ireplace('{', '', $value);
      $value = str_ireplace('}', '', $value);
      $value = str_ireplace('||', '', $value);
      $value = str_ireplace('&&', '', $value);
      $value = str_ireplace('&', '', $value);
      $value = str_ireplace('|', '', $value);
      $value = str_ireplace("'", '', $value);
      $value = str_ireplace("\r", '', $value);
  
      return $value;
    }

    public static function encryption($string)
    {
      /**
       * devuelve un dato de tipo string, el valor encriptado
       *
       * este metodo es usado para la encriptacion de las claves y codigos de 
       * solicitud
       * se recomienda no cambiar la constante SECRET_KEY cuando ya hayan
       * registros
       * 
       * @static 
       * @access public
       * @param string $string valor a encriptar
       * @return string
       */
  
      $key = hash('sha256', SECRET_KEY);
      $iv = substr(hash('sha256', SECRET_IV), 0, 16);
      $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
      $output = base64_encode($output);
      return $output;
    }
    public static function decryption($string)
    {
      /**
       * devuelve un dato de tipo string con el valor desencriptado 
       *
       * este metodo es usado para desencriptar los valores anteriormente 
       * encriptados
       * 
       * @static
       * @access public
       * @param string $string valor a desencriptar
       * 
       * @return boolean
       */
  
      $key = hash('sha256', SECRET_KEY);
      $iv = substr(hash('sha256', SECRET_IV), 0, 16);
      $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
      return $output;
    }

    public static function validateIndentificacion($id,$val){
        $value = new ValidarIdentificacion;

        //ecuador
        if($val==true){

            if(strlen($id)==10){
                $final = $value->validarCedula($id);
                if($final){
                    $final_value= true;
                }else{
                    $final_value= false;
                }
                

            }else if(strlen($id)==13){
                $final= $value->validarRucPersonaNatural($id);
                if(!$final){
                    $final_r = $value->validarRucSociedadPrivada($id);
                    if(!$final_r){
                        $final_f= $value->validarRucSociedadPublica($id);
                        if($final_f){
                            $final_value=true;
                        }else{
                            $final_value=false;
                        }
                    }else{
                        $final_value=true;
                    }
                }else{
                    $final_value=true;
                }

            }else{
                $final_value=false;
            }

        }else{
            $final_value=true;
        }
        return $final_value;
    }

    protected static function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip_client = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_client = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip_client = $_SERVER['REMOTE_ADDR'];
        }
        return $ip_client;
    }

    protected function saveSession($data){
        $sql= MainModel::getConection()->prepare("INSERT INTO mov_session(id_usuario,token,estado,ip) 
        values(:IdUsuario,:Token,:Estado,:Ip)");
        $sql->bindParam(":IdUsuario",$data['id_usuario']);
        $sql->bindParam(":Token",$data['token']);
        $sql->bindParam(":Estado",$data['estado']);
        $sql->bindParam(":Ip",$data['ip']);
        $sql->execute();
        return $sql;
    }

    

    
}