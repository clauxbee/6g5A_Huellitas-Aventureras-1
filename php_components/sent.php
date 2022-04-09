<!DOCTYPE html>
<html lang="es">
<head>
<style>
body {
        background-image: url("../img/FondoHuellitas.png");
}
form {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
}
.contenedor {
    max-width:50%;
    margin:0 auto;
    padding: 20px;
    background-color: rgba(247, 251, 255, 0.75);
}
h1, h2 {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    text-align: center;
}
div.contenido {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    width: 60%;
    margin: 30px auto 0 auto;
    font-size: 24px;
}
div.campo {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    margin-bottom: 10px;
}
div.informacion::after,
div.cursos::after,
div.tipo_curso::after {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    content: '';
    display: block;
    clear: both;
}
div.informacion .campo,
div.cursos .campo {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    width: 33.3%;
    float: left;
}
div.tipo_curso > .campo {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    width: 50%;
    float: left;
}
label {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    font-family: geneva;
    display: block;
    font-size: 16px;
}
input{
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    height: 30px;
}
div.textarea {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    margin-top:20px;
}
textarea {
    box-sizing: inherit;
    margin:0;
    padding:0;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    color: #4a849f;
    width: 100%;
}

#error {
    color: red;
}
</style>   
</head>
<?php include_once("php_components/head.php"); ?>
<body>
<?php include_once("php_components/header_nav.php"); ?>

<div class="contenedor">
<?php
$resultados = $_GET;
?>
<h1>Formulario Enviado</h1>
    <br>
    <br>
<?php if (!isset($resultados['userName']) || trim($resultados['userName']) != '') { ?>
    <p>Nombre de usuario: <?php echo $resultados['userName'] ?></p>
<?php } else {
    echo "Se debe introducir un nombre.";
} ?>
<br>
<br>

<?php if (isset($resultados['userGender'])) {
    $gender = $resultados['userGender'];
    switch ($gender) {
        case 'm':
            echo 'Género: Masculino<br><br>';
            break;
        case 'f':
            echo 'Género: Femenino<br><br>';
            break;
        case 'o':
            echo 'Género: Otro<br><br>';
            break;
    }
} ?>

<?php if (!isset($resultados['userPhone']) || trim($resultados['userPhone']) != '') { ?>
    <p>Teléfono de Contacto: <?php echo $resultados['userPhone'] ?></p>
<?php } else {
    echo "No se proporcionó teléfono de contacto.";
} ?>

<br>
<br>

<?php if (!isset($resultados['userMail']) || trim($resultados['userMail']) != '') { ?>
    <p>Correo de Contacto: <?php echo $resultados['userMail'] ?></p>
<?php } else {
    echo "<p class='error'>No se proporcionó correo de contacto.</p>";
} ?>

<br>
<br>

<?php if(isset($resultados['prefs'])) {
    $prefs = $resultados['prefs'];
    echo "Tu preferencia de contacto es: </br>";
    foreach($prefs as $pref) {
        echo $pref . '<br/>';
    }
} else {
    echo "<p style='color: red;'>No elegiste preferencias de contacto.</p>";
} ?>

<br>
<br>

<?php if (!isset($resultados['userAddres']) || trim($resultados['userAddres']) != '') { ?>
    <p>Dirección: <?php echo $resultados['userAddres'] ?></p>
<?php } else {
    echo "No se proporcionó una dirección.";
} ?>

<br>
<br>

<?php if(isset($resultados['userAddresHint'])) {
    $referencias = $resultados['userAddresHint'];
    $nuevas_referencias = filter_var($referencias, FILTER_SANITIZE_STRING);
    if(strlen($nuevas_referencias) > 0 &&  trim($nuevas_referencias)) {
        echo  'Referencias: '.$nuevas_referencias;
    } else {
        echo "No hay referencias.";
    }
} ?>

<br>
<br>

<?php if(isset($resultados['userResume'])) {
    $resumen = $resultados['userResume'];
    $nuevo_resumen = filter_var($resumen, FILTER_SANITIZE_STRING);
    if(strlen($nuevo_resumen) > 0 &&  trim($nuevo_resumen)) {
        echo  'Consulta: '.$nuevo_resumen;
    } else {
        echo "No hay resumen.";
    }
} ?>

<br>
<br>

<?php  $topics = array(
    'paseador' => 'Paseador',
    'cliente' => 'Cliente',
    'otra' => 'Otra'
);?>

<?php if(array_key_exists($resultados['topics'], $topics)) {
    $tipo_consulta = $resultados['topics'];
    switch ($tipo_consulta) {
        case 'paseador':
            echo "Consulta de Paseador";
            break;
        case 'cliente':
            echo "Consulta de Cliente";
            break;
        case 'otra':
            echo "Otra Consulta";
            break;
    }
} else {
    echo "No elegiste tipo de consulta.";
} ?>
</div>

<?php include_once("php_components/footer.php"); ?>

<?php include_once("php_components/scripts.php"); ?>
</body>
</html>