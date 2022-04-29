<?php
session_start();
include_once("accesoBD.php");
include_once("Persona.php");
include_once("Mascota.php");

class Usuario extends Persona
{
    var $sIdUsuario = 0;
    var $sContraseña = "";
    var $arrMascotas = array();

    public function getArrMascotas()
    {
        return $this->arrMascotas;
    }

    public function setArrMascotas($userID)
    {
        $db = new accesoBD();
        $pets = array();
        $query = "";
        $arrRS = null;
        $petIndex = 0;
        $pet = null;

        if ($db->connect()) {
            $query = "SELECT * FROM mascotas
                       WHERE mascotas.ID_Usuario = '" . $userID . "'";

            $arrRS = $db->execQuery($query);
            $db->disconnect();

            if ($arrRS != null) {
                foreach ($arrRS as $rowPet) {
                    $pet = new Mascota();

                    $pet->setIdMascota($rowPet[0]);
                    $pet->setNombre($rowPet[1]);
                    $pet->setEdad($rowPet[2]);
                    $pet->setRaza($rowPet[3]);
                    $pet->setIdUsuario($rowPet[4]);

                    $pets[$petIndex] = array($pet->getIdMascota(), $pet->getNombre(), $pet->getEdad(), $pet->getRaza(), $pet->getIdUsuario());

                    $petIndex++;
                }
            }
        }

        $this->arrMascotas = $pets;
    }

    function setIdUsuario($psIdUsuario)
    {
        $this->sIdUsuario = $psIdUsuario;
    }

    function getIdUsuario()
    {
        return $this->sIdUsuario;
    }

    function setContraseña($psContraseña)
    {
        $this->sContraseña = $psContraseña;
    }

    function getContraseña()
    {
        return $this->sContraseña;
    }

    public function addUser()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sContraseña == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "INSERT INTO usuarios(ID_Usuario, Nombre, Genero, Edad, Telefono, Domicilio, Correo, Contraseña)
                      VALUES(" . $this->sIdUsuario . ", '" . $this->sNombre . "', '" . $this->sGenero . "', " . $this->sEdad . ", " . $this->sTelefono . ", '" . $this->sDomicilio . "', '" . $this->sCorreo . "', '" . $this->sContraseña . "')";

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

    public function findUserByEmailPswd()
    {
        $found = false;
        $query = "";
        $arrRS = null;

        if ($this->sContraseña == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "SELECT * FROM usuarios
                       WHERE usuarios.correo = '" . $this->sCorreo . "'
                       AND usuarios.contraseña = '" . $this->sContraseña . "'";
            $db = new accesoBD();

            if ($db->connect()) {
                $arrRS = $db->execQuery($query);
                $db->disconnect();

                if ($arrRS != null) {
                    $this->sIdUsuario = $arrRS[0][0];
                    $this->sNombre = $arrRS[0][1];
                    $this->sGenero = $arrRS[0][2];
                    $this->sEdad = $arrRS[0][3];
                    $this->sTelefono = $arrRS[0][4];
                    $this->sDomicilio = $arrRS[0][5];
                    $this->sCorreo = $arrRS[0][6];
                    $this->sContraseña = $arrRS[0][7];
                    $this->setArrMascotas($this->sIdUsuario);

                    $found = true;
                }
            }
        }

        return $found;
    }

    public function findAllUsers()
    {
        $db = new accesoBD();
        $query = "";
        $arrRS = null;
        $lastIndex = 0;

        if ($db->connect()) {
            $query = "SELECT * FROM usuarios";

            $arrRS = $db->execQuery($query);
            $db->disconnect();

            if ($arrRS != null) {
                foreach ($arrRS as $rowPet) {
                    $lastIndex++;
                }
            }
        }

        $_SESSION["lastUserIndex"] = $lastIndex;
    }
}

?>