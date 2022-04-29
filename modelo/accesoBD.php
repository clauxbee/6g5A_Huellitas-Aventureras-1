<?php
error_reporting(E_ALL);

class accesoBD {
    private $oConexion = null;

    function connect() {
        $ret = false;
        try {
            $this->oConexion = new PDO("mysql:host=localhost;dbname=huellitas_aventureras","root","",  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
            $ret = true;
        } catch (Exception $exception) {
            throw $exception;
        }
        return $ret;
    }

    function disconnect() {
        $ret = false;
        if ($this->oConexion != null) {
            $this->oConexion = null;
            $ret = true;
        }
        return $ret;
    }

    function execQuery($query) {
        $arrRS = null;
        $rst = null;
        $oLinea = null;
        $sValCol = "";
        $i=0;
        $j=0;
        if ($query == ""){
            throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
        }
        if ($this->oConexion == null){
            throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
        }
        try{
            $rst = $this->oConexion->query($query); //un objeto PDOStatement o falso en caso de error
        }catch(Exception $e){
            throw $e;
        }
        if ($rst){
            foreach($rst as $oLinea){
                foreach($oLinea as $llave=>$sValCol){
                    if (is_string($llave)){
                        $arrRS[$i][$j] = $sValCol;
                        $j++;
                    }
                }
                $j=0;
                $i++;
            }
        }
        return $arrRS;
    }

    function execCommand($query) {
        $nAfectados = -1;
        if ($query == ""){
            throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
        }
        if ($this->oConexion == null){
            throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
        }
        try{
            $nAfectados =$this->oConexion->exec($query);
        }catch(Exception $e){
            throw $e;
        }
        return $nAfectados;
    }
}
?>