<?php
include_once("../modelo/Usuario.php");

session_start();
$error="";
$user = new Usuario();

$mail="";
$pass="";

if (isset($_POST["email"]) && !empty($_POST["email"]) &&
    isset($_POST["password"]) && !empty($_POST["password"])) {
    $mail = $_POST["email"];
    $pass = $_POST["password"];

    $user->setCorreo($mail);
    $user->setContraseña($pass);

    try {
        if ($user->findUserByEmailPswd()) {
            $_SESSION["userID"] = $user->getIdUsuario();
            $_SESSION["userName"] = $user->getNombre();
            $_SESSION["userGender"] = $user->getGenero();
            $_SESSION["userAge"] = $user->getEdad();
            $_SESSION["userPhone"] = $user->getTelefono();
            $_SESSION["userAddress"] = $user->getDomicilio();
            $_SESSION["userMail"] = $user->getCorreo();
            $_SESSION["userPassword"] = $user->getContraseña();
            $user->setArrMascotas($user->getIdUsuario());
            $_SESSION["userPets"] = $user->getArrMascotas();
        } else
            $error = "Usuario no encontrado";
    } catch (Exception $e){
        error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
        $error = "Error al acceder a la base de datos";
    }
} else
    $error = "Faltan Datos";

if ($error == "")
    header("Location: ../index.php");
?>