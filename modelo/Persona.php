<?php

class Persona{
	var $sNombre="";
	var $sGenero='';
    var $sEdad=0;
    var $sTelefono=0;
    var $sDomicilio="";
    var $sCorreo="";
   
    function setNombre($psNombre){
       $this->sNombre = $psNombre;
    }
    function getNombre(){
       return $this->sNombre;
    }

    function setGenero($psGenero){
        $this->sGenero = $psGenero;
     }
     function getGenero(){
        return $this->sGenero;
     }

     function setEdad($psEdad){
        $this->sEdad = $psEdad;
     }
     function getEdad(){
        return $this->sEdad;
     }

     function setTelefono($psTelefono){
        $this->sTelefono = $psTelefono;
     }
     function getTelefono(){
        return $this->sTelefono;
     }

     function setDomicilio($psDomicilio){
        $this->sDomicilio = $psDomicilio;
     }
     function getDomicilio(){
        return $this->sDomicilio;
     }

     function setCorreo($psCorreo){
        $this->sCorreo = $psCorreo;
     }
     function getCorreo(){
        return $this->sCorreo;
     }
   } 
?>