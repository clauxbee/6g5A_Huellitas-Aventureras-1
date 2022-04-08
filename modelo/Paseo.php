<?php

class Paseo{
   protected $sDuracion=0;
   protected $sEstado="";
   protected $sHora="";
   protected $sIdPaseo=0;
   protected $sIdUsuario=0;
   protected $sIdMascota=0;
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
        $this->sIdMascota = $psIdMascota;
     }
     function getIdMascota(){
        return $this->sIdMascota;
     }

     function setIdPaseador($psIdPaseador){
        $this->sIdPaseador = $psIdPaseador;
     }
     function getIdPaseador(){
        return $this->sIdPaseador;
     }
}
?>