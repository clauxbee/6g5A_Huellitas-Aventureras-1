<?php
session_start();
include_once("../modelo/Usuario.php");
$error = "";
$user = new Usuario();

$userID = $_SESSION["userID"];
$userName = "";
$userGender = "";
$userAge = 0;
$userPhone = 0;
$userAddress = "";
$userMail = "";
$userPassword = "";
echo "userID: " . $userID . "<br>";
echo "_GET: ";
var_dump($_GET);
echo "<br>";

if (isset($_GET["userName"]) && !empty($_GET["userName"]) &&
    isset($_GET["adressUser"]) && !empty($_GET["adressUser"]) &&
    isset($_GET["phoneUser"]) && !empty($_GET["phoneUser"]) &&
    isset($_GET["genderUser"]) && !empty($_GET["genderUser"]) &&
    isset($_GET["emailUser"]) && !empty($_GET["emailUser"])
) {
    $userID = $_GET["userID"];
    $userName = $_GET["userName"];
    $userGender = $_GET["genderUser"];
    $userAge = $_GET["ageUser"];
    $userPhone = $_GET["phoneUser"];
    $userAddress = $_GET["adressUser"];
    $userMail = $_GET["emailUser"];
    if (isset($_GET["passwordOneUser"]) && !empty($_GET["passwordOneUser"] ||
            isset($_GET["passwordTwoUser"]) && !empty($_GET["passwordTwoUser"]))) {
        if ($_GET["passwordOneUser"] == $_GET["passwordTwoUser"]) {
            $userPassword = $_GET["passwordTwoUser"];
            $user->setContraseña($userPassword);
        } else {
            $error = "Las contraseñas no coinciden";
        }
    } else {
        $userPassword = $_SESSION["userPassword"];
        $user->setContraseña($userPassword);
    }

    $user->setIdUsuario($userID);
    $user->setNombre($userName);
    $user->setGenero($userGender);
    $user->setEdad($userAge);
    $user->setTelefono($userPhone);
    $user->setDomicilio($userAddress);
    $user->setCorreo($userMail);

//    var_dump($pet);
//    echo "<br>";
//    var_dump($_SESSION);

    try {
        echo "user: ";
        var_dump($user);
        echo "<br>";
        if ($user->updateUser()) {
            $user->setArrMetodos($userID);
            $_SESSION["userID"] = $user->getIdUsuario();
            $_SESSION["userName"] = $user->getNombre();
            $_SESSION["userGender"] = $user->getGenero();
            $_SESSION["userAge"] = $user->getEdad();
            $_SESSION["userPhone"] = $user->getTelefono();
            $_SESSION["userAddress"] = $user->getDomicilio();
            $_SESSION["userMail"] = $user->getCorreo();
            $_SESSION["userPassword"] = $user->getContraseña();
            echo "<br>";
            echo "<br>";
            var_dump($_SESSION);
            echo "<br>";
            echo "<br>";
            var_dump($user);
        } else {
            $error = "Método no registrada";
            header("Location: ../edit-data.php");
            $_SESSION["validUserUpdate"]="false";
            $_SESSION["userEditError"] = "No se modificaron datos.";
        }
    }  catch (Exception $e){
        error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
        $sErr = "Error al acceder a la base de datos";
    }
} else {
    $error = "Faltan Datos. Controlador";
    header("Location: ../edit-data.php");
    $msg = "Debe establecer un correo y una contraseña.";
    $_SESSION["validUserUpdate"]="false";
    $_SESSION["userEditError"] = "Hay campos obligatorios vacíos.";
    var_dump($_SESSION);
}

if ($error == "") {
        header("Location: ../profile.php");
}else {
    echo $error;
}
?>