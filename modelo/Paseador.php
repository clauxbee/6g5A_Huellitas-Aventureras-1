<?php

class Paseador extends Persona{
   protected $sIdPaseador=0;
   
     function setIdPaseador($psIdPaseador){
        $this->sIdPaseador = $psIdPaseador;
     }
     function getIdPaseador(){
        return $this->sIdPaseador;
     }
}
?>