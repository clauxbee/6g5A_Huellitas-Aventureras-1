<?php

class Paseo{
   protected $sDuracion=0;
   protected $sEstado="";
   protected $sHora="";
   protected $sIdPaseo=0;
   protected $sIdUsuario=0;
   protected $sMascota=0;
   protected $sIdPaseador=0;
   
     function setDuracion($psDuracion){
        $this->sDuracion = $psDuracion;
     }
     function getDuracion(){
        return $this->sDuracion;
     }
     
     function setEstado($psEstado){
        $this->sEstado = $psEstado;
     }
     function getEstado(){
        return $this->sEstado;
     }

     function setHora($psHora){
        $this->sHora = $psHora;
     }
     function getHora(){
        return $this->sHora;
     }

     function setIdPaseo($psIdPaseo){
        $this->sIdPaseo = $psIdPaseo;
     }
     function getIdPaseo(){
        return $this->sIdPaseo;
     }

     function setIdUsuario($psIdUsuario){
        $this->sIdUsuario = $psIdUsuario;
     }
     function getIdUsuario(){
        return $this->sIdUsuario;
     }

     function setIdMascota($psIdMascota){
        $this->sMascota = $psIdMascota;
     }
     function getIdMascota(){
        return $this->sMascota;
     }

     function setIdPaseador($psIdPaseador){
        $this->sIdPaseador = $psIdPaseador;
     }
     function getIdPaseador(){
        return $this->sIdPaseador;
     }

    public function findAllPays()
    {
        $db = new accesoBD();
        $query = "";
        $arrRS = null;
        $lastIndex = 0;

        if ($db->connect()) {
            $query = "SELECT * FROM paseo";

            $arrRS = $db->execQuery($query);
            $db->disconnect();

            if ($arrRS != null) {
                foreach ($arrRS as $rowPay) {
                    $lastIndex++;
                }
            }
        }

        $_SESSION["lastRideIndex"] = $lastIndex;
    }

    public function requestRide()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sHora == "" || $this->sEstado == "" || $this->sDuracion == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "INSERT INTO paseo(ID_Paseo, Duracion, Estado, Hora_Solicitud, ID_Usuario, Mascota)
                      VALUES(" . $this->sIdPaseo . ", " . $this->sDuracion . ", '" . $this->sEstado . "', '" . $this->sHora . "', " . $this->sIdUsuario . ", '" . $this->sMascota . "')";

            echo $query;

            if ($db->connect()) {
                $arrRS = $db->execCommand($query);
                $db->disconnect();

                if ($arrRS != null) {
                    $registered = true;
                }
            }
        }

        return $registered;
    }
}
?>