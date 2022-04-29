<?php
if ($_SESSION["validRegister"] == "false") {
    echo "<div class='col-md-12' style='padding:20px; background-color:#A33D3D; line-height:1; color: white; font-weight: bold;'>
            Faltan campos obligatorios por rellenar.
          </div>";
}
?>
<section class="contact-page">
    <div class="container">
        <div class="text-center">
            <h2 class="title">Crea tu cuenta</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="GET"
                  action="../controlador/register_controller.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <img src=img/regIcon.png>
                    <p>Ingresa los siguientes datos</p>
                    <div class="form-group">
                        <p><label for="modrgstr_username">Nombre</label>
                            <input id="modrgstr_username" type="text" name="nombreUser" class="inputbox" size="18"
                                   autocomplete="off"></p>
                    </div>
                    <div class="form-group">
                        <p><label for="modrgstr_userage">Edad</label>
                            <input id="modrgstr_userare" type="text" name="ageUser" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">

                        <label>Dirección </label>
                        <p>
                            <input id="modrgstr_useradress" type="text" name="adressUser" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>
                    <div class="form-group"><p>
                            <label for="modrgst_userphone">Número de celular</label>
                            <input id="modrgstr_userphone" type="text" name="phoneUser" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>
                    <div class="form-group">
                        <p>
                            <label>Género</label>
                            <input name="genderUser" type="radio" id="Genero" value="M"> Masculino</input>
                            <input name="genderUser" type="radio" id="Genero" value="F"> Femenino</input>
                            <input name="genderUser" type="radio" id="Genero" value="O" checked> Otro</input>
                        </p>
                    </div>
                    <div class="form-group"><p>
                            <label for="modrgstr_useremail">Correo* </label>
                            <input id="modrgstr_useremail" type="email" name="emailUser" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>

                    <div class="form-group"><p>
                            <label for="modrgstr_passwd">Contraseña* </label>
                            <input id="modrgstr_passwd" type="password" name="passwordOneUser" class="inputbox"
                                   size="18"
                                   autocomplete="off">
                        </p></div>

                    <div class="form-group"><p>
                            <label for="modrgstr_passwd">Repetir contraseña* </label>
                            <input id="modrgstr_passwd" type="password" name="passwordTwoUser" class="inputbox"
                                   size="18"
                                   autocomplete="off">
                        </p></div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">
                            Registrarse
                        </button>
                    </div>

                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->