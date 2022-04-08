<?php

class Usuario extends Persona{
   protected $sIdUsuario=0;
   protected $sContraseña="";
   
     function setIdUsuario($psIdUsuario){
        $this->sIdUsuario = $psIdUsuario;
     }
     function getIdUsuario(){
        return $this->sIdUsuario;
     }
     
     function setContraseña($psContraseña){
        $this->sContraseña = $psContraseña;
     }
     function getContraseña(){
        return $this->sContraseña;
     }
}
?>