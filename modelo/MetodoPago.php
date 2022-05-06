<?php

class MetodoPago
{
    protected $sTitular = "";
    protected $sTipoProducto = "";
    protected $sNumero = "";
    protected $sCVV = "";
    protected $sIdMetodo = 0;
    protected $sIdUsuario = 0;

    function setTitular($psTitular)
    {
        $this->sTitular = $psTitular;
    }

    function getTitular()
    {
        return $this->sTitular;
    }

    function setTipoProducto($psTipoProducto)
    {
        $this->sTipoProducto = $psTipoProducto;
    }

    function getTipoProducto()
    {
        return $this->sTipoProducto;
    }

    function setNumero($psNumero)
    {
        $this->sNumero = $psNumero;
    }

    function getNumero()
    {
        return $this->sNumero;
    }

    function setCVV($psCVV)
    {
        $this->sCVV = $psCVV;
    }

    function getCVV()
    {
        return $this->sCVV;
    }

    function setIdMetodo($psIdMetodo)
    {
        $this->sIdMetodo = $psIdMetodo;
    }

    function getIdMetodo()
    {
        return $this->sIdMetodo;
    }

    function setIdUsuario($psIdUsuario)
    {
        $this->sIdUsuario = $psIdUsuario;
    }

    function getIdUsuario()
    {
        return $this->sIdUsuario;
    }

    public function findAllPays()
    {
        $db = new accesoBD();
        $query = "";
        $arrRS = null;
        $lastIndex = 0;

        if ($db->connect()) {
            $query = "SELECT * FROM metodo_pago";

            $arrRS = $db->execQuery($query);
            $db->disconnect();

            if ($arrRS != null) {
                foreach ($arrRS as $rowPay) {
                    $lastIndex++;
                }
            }
        }

        $_SESSION["lastPayIndex"] = $lastIndex;
    }

    public function updatePay()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sNombre == "" || $this->sEdad == "" || $this->sRaza == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "UPDATE metodo_pago SET
                      ID_Metodo = " . $this->sIdMetodo . ",
                      Titular = '" . $this->sTitular . "',
                      Tipo_Producto = " . $this->sTipoProducto . ",
                      Numero = '" . $this->sNumero . "',
                      CVV = '" . $this->sCVV . "',
                      ID_Usuario = " . $this->sIdUsuario . "
                      WHERE ID_Usuario = " . $this->sIdUsuario . "
                      AND ID_Metodo = " . $this->sIdMetodo . "";

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

    public function deletePay()
    {
        $db = new accesoBD();
        $deleted = false;
        $query = "";
        $arrRS = null;

        if ($this->sNombre == "" || $this->sEdad == "" || $this->sRaza == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "DELETE FROM metodo_pago
                      WHERE ID_Usuario=" . $this->sIdUsuario . "
                      AND ID_Mascotas = " . $this->sIdMetodo . "";

            echo $query;

            if ($db->connect()) {
                $arrRS = $db->execCommand($query);
                $db->disconnect();

                if ($arrRS != null) {
                    $deleted = true;
                }
            }
        }

        return $deleted;
    }

    public function addPay()
    {
        $db = new accesoBD();
        $registered = false;
        $query = "";
        $arrRS = null;

        if ($this->sNombre == "" || $this->sEdad == "" || $this->sRaza == "") {
            throw new Exception("Usuario->buscar: faltan datos");
        } else {
            $query = "INSERT INTO metodo_pago(ID_Metodo, Titular, Tipo_Producto, Numero, CVV, ID_Usuario)
                      VALUES(" . $this->sIdMetodo . ", '" . $this->sTitular . "', " . $this->sTipoProducto . ", '" . $this->sNumero . "', '" . $this->sCVV . "', " . $this->sIdUsuario . ")";

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