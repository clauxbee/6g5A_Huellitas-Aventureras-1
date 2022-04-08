<?php

class MetodoPago{
	protected $sTitular="";
	protected $sTipoProducto="";
	protected $sNumero="";
	protected $sCVV="";
	protected $sIdMetodo=0;
    protected $sIdUsuario=0;
   
    function setTitular($psTitular){
       $this->sTitular = $psTitular;
    }
    function getTitular(){
       return $this->sTitular;
    }

    function setTipoProducto($psTipoProducto){
        $this->sTipoProducto = $psTipoProducto;
     }
     function getTipoProducto(){
        return $this->sTipoProducto;
     }

     function setNumero($psNumero){
        $this->sNumero = $psNumero;
     }
     function getNumero){
        return $this->sNumero;
     }

     function setCVV($psCVV){
        $this->sCVV = $psCVV;
     }
     function getCVV(){
        return $this->sCVV;
     }

     function setIdMetodo($psIdMetodo){
        $this->sIdMetodo = $psIdMetodo;
     }
     function getIdMetodo(){
        return $this->sIdMetodo;
     }

     function setIdUsuario($psIdUsuario){
        $this->sIdUsuario = $psIdUsuario;
     }
     function getIdUsuario(){
        return $this->sIdUsuario;
     }
    } 
?>