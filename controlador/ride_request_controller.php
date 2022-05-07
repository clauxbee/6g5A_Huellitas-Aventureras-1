<?php
session_start();
include_once("../modelo/Paseo.php");
include_once("../modelo/Usuario.php");
$error = "";
$ride = new Paseo();
$user = new Usuario();
$ride->findAllPays();

$userID = 0;
$rideStatus = "";
$ridePetName = "";
$rideDuration = 0;
$rideHour = "";
$petID = 0;
$riderID = 0;
$rideIndex = $_SESSION["lastRideIndex"] + 1;
echo $rideIndex;

if (isset($_GET["petName"]) && !empty($_GET["petName"]) &&
    isset($_GET["startHour"]) && !empty($_GET["startHour"]) &&
    isset($_GET["rider"]) && !empty($_GET["rider"]) &&
    isset($_GET["duration"]) && !empty($_GET["duration"])
) {
    $userID = $_GET["userID"];
    $ridePetName = $_GET["petName"];
    $rideStatus = "En curso";
    $rideDuration = $_GET["duration"];
    $rideHour = $_GET["startHour"];
    $ride->setIdPaseo($rideIndex);
    $ride->setIdPaseador($riderID);
    $ride->setIdMascota($ridePetName);
    $ride->setIdUsuario($userID);
    $ride->setHora($rideHour);
    $ride->setEstado($rideStatus);
    $ride->setDuracion($rideDuration);

//    var_dump($pet);
//    echo "<br>";
//    var_dump($_SESSION);

    try {
        if ($ride->requestRide()) {
            $user->setArrPaseos($userID);
            $_SESSION["userRides"] = $user->getArrPaseos();
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
    header("Location: ../servicios.php");
    $msg = "Debe establecer un correo y una contraseña.";
    $_SESSION["validPetRegister"]="false";
    var_dump($_SESSION);
}

if ($error == "") {
    header("Location: ../cuenta.php");
}else {
    echo $error;
}
?>