<?php
session_start();
include_once("../modelo/MetodoPago.php");
include_once("../modelo/Usuario.php");
$error = "";
$pay = new MetodoPago();
$user = new Usuario();
$pay->findAllPays();

$userID = 0;
$payTitular = "";
$payTipo = 0;
$payNumero = "";
$payCVV = "";
$payIndex = $_SESSION["editPayIndex"];
echo $payIndex;

if (isset($_GET["namePay"]) && !empty($_GET["namePay"]) &&
    isset($_GET["typePay"]) && !empty($_GET["typePay"]) &&
    isset($_GET["numberPay"]) && !empty($_GET["numberPay"]) &&
    isset($_GET["cvvPay"]) && !empty($_GET["cvvPay"])
) {
    $userID = $_GET["userID"];
    $payTitular = $_GET["namePay"];
    $payTipo = $_GET["typePay"];
    $payNumero = $_GET["numberPay"];
    $payCVV = $_GET["cvvPay"];
    $pay->setTitular($payTitular);
    $pay->setTipoProducto($payTipo);
    $pay->setNumero($payNumero);
    $pay->setCVV($payCVV);
    $pay->setIdMetodo($payIndex);
    $pay->setIdUsuario($userID);

//    var_dump($pet);
//    echo "<br>";
//    var_dump($_SESSION);

    try {
        if ($pay->deletePay()) {
            $user->setArrMetodos($userID);
            $_SESSION["userPays"] = $user->getArrMetodos();
            echo "<br>";
            echo "<br>";
            var_dump($_SESSION);
            echo "<br>";
            echo "<br>";
            var_dump($user);
        } else
            $error = "Método no registrada";
    }  catch (Exception $e){
        error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
        $sErr = "Error al acceder a la base de datos";
    }
} else {
    $error = "Faltan Datos";
    header("Location: ../profile.php");
    $msg = "Debe establecer un correo y una contraseña.";
    $_SESSION["validPetRegister"]="false";
    var_dump($_SESSION);
}

if ($error == "") {
    header("Location: ../profile.php");
}else {
    echo $error;
}
?>