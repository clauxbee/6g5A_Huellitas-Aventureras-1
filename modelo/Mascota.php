<?php

include_once("accesoBD.php");

class Mascota
{
    protected $sNombre = "";
    protected $sEdad = 0;
    protected $sRaza = "";
    protected $sIdUsuario = 0;
    protected $sIdMascota = 0;

    function setNombre($psNombre)
    {
        $this->sNombre = $psNombre;
    }

    function getNombre()
    {
        return $this->sNombre;
    }

    function setEdad($psEdad)
    {
        $this->sEdad = $psEdad;
    }

    function getEdad()
    {
        return $this->sEdad;
    }

    function setRaza($psRaza)
    {
        $this->sRaza = $psRaza;
    }

    function getRaza()
    {
        return $this->sRaza;
    }

    function setIdUsuario($psIdUsuario)
    {
        $this->sIdUsuario = $psIdUsuario;
    }

    function getIdUsuario()
    {
        return $this->sIdUsuario;
    }

    function setIdMascota($psIdMascota)
    {
        $this->sIdMascota = $psIdMascota;
    }

    function getIdMascota()
    {
        return $this->sIdMascota;
    }
}

?>