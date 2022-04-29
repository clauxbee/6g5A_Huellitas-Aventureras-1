<?php

include_once("accesoBD.php");
include_once("Persona.php");
include_once("Mascota.php");

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

     public function findUserByEmailPswd() {
         $found = false;
         $query = "";
         $arrRS = null;

         if ($this->sContraseña == "") {
             throw new Exception("Usuario->buscar: faltan datos");
         } else {
             $query = "SELECT * FROM usuarios
                       WHERE usuarios.correo = '".$this->sCorreo."'
                       AND usuarios.contraseña = '".$this->sContraseña."'";
             $db = new accesoBD();

             if ($db->connect()) {
                 $arrRS = $db->execQuery($query);
                 $db->disconnect();

                 if ($arrRS != null){
                     $this->sIdUsuario = $arrRS[0][0];
                     $this->sNombre = $arrRS[0][1];
                     $this->sGenero = $arrRS[0][2];
                     $this->sEdad = $arrRS[0][3];
                     $this->sTelefono = $arrRS[0][4];
                     $this->sDomicilio = $arrRS[0][5];
                     $this->sCorreo = $arrRS[0][6];
                     $this->sContraseña = $arrRS[0][7];

                     $found = true;
                 }
             }
         }

         return $found;
     }
}
?>