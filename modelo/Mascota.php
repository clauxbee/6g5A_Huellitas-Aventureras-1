<?php

include_once("accesoBD.php");

class Mascota
{
    var $sNombre = "";
    var $sEdad = 0;
    var $sRaza = "";
    var $sIdUsuario = 0;
    var $sIdMascota = 0;

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

    public function findAllPets()
    {
        $db = new accesoBD();
        $query = "";
        $arrRS = null;
        $lastIndex = 0;

        if ($db->connect()) {
            $query = "SELECT * FROM mascotas";

            $arrRS = $db->execQuery($query);
            $db->disconnect();

            if ($arrRS != null) {
                foreach ($arrRS as $rowPet) {
                    $lastIndex++;
                }
            }
        }

        $_SESSION["lastPetIndex"] = $lastIndex;
    }

    public function updatePet()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sNombre == "" || $this->sEdad == "" || $this->sRaza == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "UPDATE mascotas SET
                      ID_Mascotas = " . $this->sIdMascota . ",
                      Nombre = '" . $this->sNombre . "',
                      Edad = " . $this->sEdad . ",
                      Raza = '" . $this->sRaza . "',
                      ID_Usuario = " . $this->sIdUsuario . "
                      WHERE ID_Usuario = " . $this->sIdUsuario . "";

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

    public function addPet()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sNombre == "" || $this->sEdad == "" || $this->sRaza == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "INSERT INTO usuarios(ID_Mascotas, Nombre, Edad, Raza, ID_Usuario)
                      VALUES(" . $this->sIdMascota . ", '" . $this->sNombre . "', " . $this->sEdad . ", '" . $this->sRaza . "', " . $this->sIdUsuario . ")";

            $_SESSION["query"] = $query;

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