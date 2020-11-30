<?php 


    require_once('./class/Main.php');
    require_once('./core/mainModel.php');


class ConfMainModel extends MainModel{


    public function __construct()
    {
        
    }

    public function saveConfMain(Main $main){
        $statement="INSERT INTO conf_main(codigo,id_empresa,estado,menu_select,areas_empresa) 
        values(:Codigo,:IdEmpresa,:Estado,:MenuSelect,:AreasEmpresa)";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Codigo",$main->getCodigo());
        $sql->bindParam(":IdEmpresa",$main->getId_empresa());
        $sql->bindParam(":MenuSelect",$main->getMenu_select());
        $sql->bindParam(":Estado",$main->getEstado());
        $sql->bindParam(":AreasEmpresa",$main->getAreas_empresa());
        $sql->execute();
        return $sql;
       
    }


     



    public function updateMainSelect($estado,$id_main){
        $statement= "UPDATE conf_main SET menu_select=:Estado WHERE id =:IdMain";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Estado",$estado);
        $sql->bindParam(":IdMain",$id_main);
        $sql->execute();
        return $sql;
    }


    public function getMain($id_main){
        $statement="SELECT * FROM conf_main WHERE id=:Id";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Id",$id_main);
        $sql->execute();
        return $sql;
    }

    public function getMainCodigo($codigo){
        $statement="SELECT * FROM conf_main WHERE codigo=:Codigo";
        $sql = MainModel::getConection()->prepare($statement);
        $sql->bindParam(":Codigo",$codigo);
        $sql->execute();
        return $sql;
    }

    

   
}