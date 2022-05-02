<?php
session_start();
include_once("../modelo/Mascota.php");
include_once("../modelo/Usuario.php");
$error = "";
$pet = new Mascota();
$user = new Usuario();
$pet->findAllPets();

$userID = 0;
$petName = "";
$petAge = 0;
$petRace = "";
$petIndex = $_SESSION["editPetIndex"];
echo $petIndex;

if (isset($_GET["namePet"]) && !empty($_GET["namePet"]) &&
    isset($_GET["agePet"]) && !empty($_GET["agePet"]) &&
    isset($_GET["petRace"]) && !empty($_GET["petRace"])
) {
    $userID = $_GET["userID"];
    echo $userID;
    $petName = $_GET["namePet"];
    $petAge = $_GET["agePet"];
    $petRace = $_GET["petRace"];
    $pet->setNombre($petName);
    $pet->setEdad($petAge);
    $pet->setRaza($petRace);
    $pet->setIdMascota($petIndex);
    $pet->setIdUsuario($userID);

//    var_dump($pet);
//    echo "<br>";
//    var_dump($_SESSION);

    try {
        if ($pet->deletePet()) {
            $user->setArrMascotas($userID);
            $_SESSION["userPets"] = $user->getArrMascotas();
            echo "<br>";
            echo "<br>";
            var_dump($_SESSION);
            echo "<br>";
            echo "<br>";
            var_dump($user);
        } else {
            $error = "Mascota no eliminada";
            $user->setArrMascotas($userID);
            $_SESSION["userPets"] = $user->getArrMascotas();
            header("Location: ../profile.php");
        }
    }  catch (Exception $e){
        error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
        $sErr = "Error al acceder a la base de datos";
    }
} else
    $error = "Faltan Datos";

if ($error == "") {
    header("Location: ../profile.php");
}else {
    echo $error;
}
?>
