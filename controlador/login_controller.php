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
        if ($user->findUserByEmailPswd())
            $_SESSION["user"] = $user;
        else
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