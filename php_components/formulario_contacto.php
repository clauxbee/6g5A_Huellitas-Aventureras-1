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
<div class="contenedor">
    <h1>Formulario de Contacto</h1>
    <form action="sent.php" method="get">
        <div class="campo">
            <label class="label1" for="userName">Nombre:</label>
            <input type="text" name="userName">
        </div>

        <!--  Select  -->
        <div class="campo">
            <label class="label1" for="userGender">Género:</label>
            <select name="userGender" value="-Any-">
                <option>- Selecciona un género -</option>
                <option value="m">Masculino</option>
                <option value="f">Femenino</option>
                <option value="o">Otro</option>
            </select>
        </div>

        <div class="campo">
            <label class="label1" for="userPhone">Teléfono:</label>
            <input type="text" name="userPhone">
        </div>

        <div class="campo">
            <label class="label1" for="userMail">Correo Electrónico:</label>
            <input type="email" name="userMail">
        </div>

        <!--  Checkbox  -->
        <div class="campo">
            <p class="label1">Preferencia de Contacto:</p>
            <label class="label1" for="prefPhone">Teléfono</label>
            <input type='checkbox' name='prefs[]' value='Teléfono'>
            <label class="label1" for="prefMail">Correo</label>
            <input type='checkbox' name='prefs[]' value='Correo'>
        </div>

        <div class="campo">
            <label class="label1" for="userAddres">Dirección:</label>
            <input type="text" name="userAddres">
        </div>

        <!--  Text Area  -->
        <div class="campo">
            <label class="label1" for="userAddresHint">Referencias:</label>
            <textarea name="userAddresHint" rows="8" cols="40"></textarea>
        </div>

        <!--  Text Area  -->
        <div class="campo">
            <label class="label1" for="userResume">Escriba su duda brevemente:</label>
            <textarea name="userResume" rows="8" cols="40" id="mensaje"></textarea>
        </div>

        <!--  Radio Button  -->
        <div class="campo topics">
            <p class="label1">Tipo de consulta:</p>
            <input class="label1" type="radio" name="topics" value="paseador">Paseador
            <input class="label1" type="radio" name="topics" value="cliente">Cliente
            <input class="label1" type="radio" name="topics" value="otra" checked>Otra
        </div>

        <input type="submit" value="Enviar">
    </form>
</div>