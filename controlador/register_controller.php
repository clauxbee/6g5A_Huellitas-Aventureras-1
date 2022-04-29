<?php
include_once("../modelo/Usuario.php");
$error="";
$user = new Usuario();
$user->findAllUsers();

$mail="";
$passOne="";
$passTwo="";
$index = $_SESSION["lastUserIndex"] + 1;

if (isset($_GET["emailUser"]) && !empty($_GET["emailUser"]) &&
    isset($_GET["passwordOneUser"]) && !empty($_GET["passwordOneUser"]) &&
    isset($_GET["passwordTwoUser"]) && !empty($_GET["passwordTwoUser"])
) {
    $mail = $_GET["emailUser"];
    $passOne = $_GET["passwordOneUser"];
    $passTwo = $_GET["passwordTwoUser"];

    if ($passOne==$passTwo) {
        $user->setIdUsuario($index);
        $user->setNombre($_GET["nombreUser"]);
        $user->setGenero($_GET["genderUser"]);
        $user->setEdad($_GET["ageUser"]==""?0:$_GET["ageUser"]);
        $user->setTelefono($_GET["phoneUser"]==""?0:$_GET["phoneUser"]);
        $user->setDomicilio($_GET["adressUser"]);
        $user->setCorreo($mail);
        $user->setContraseña($passOne);

        var_dump($user);
        echo "<br>".$_SESSION["query"]."<br>";

        try {
            if ($user->addUser($index, $_GET["nombreUser"], $_GET["genderUser"], $_GET["ageUser"], $_GET["phoneUser"], $_GET["adressUser"], $_GET["emailUser"], $_GET["passwordOneUser"])) {

            } else
                $error = "Usuario no registrado";
        } catch (Exception $e){
            error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
            $sErr = "Error al acceder a la base de datos";
        }
    } else
        $error = "Las contraseñas no coinciden";
} else
    $error = "Faltan Datos";

if ($error == "")
    header("Location: ../login.php");
else {
    echo $error;
    echo $index;
}
?>
