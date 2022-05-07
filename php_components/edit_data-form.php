<style>
    body {
        background-image: url("../img/FondoHuellitas.png");
    }

    .contenedor {
        max-width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(247, 251, 255, 0.75);
    }

</style>
<section class="contact-page">
    <div class="container">
        <div class="text-center">
            <h2 class="title">Edita los datos para tu forma de pago</h2>

        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>

            <div class="col-sm-5 col-sm-offset-1">

                <div style=" padding:1px; background-color:#65AAF0; line-height:1.4;">
                    <br>
                </div>
                <img src="img/regIcon.png" width="500" height="220">

                <div style=" padding:1px; background-color:#65AAF0; line-height:2.5;">
                    <br></div>
            </div>

            <div class="col-sm-5">

                <p>Datos personales:</p>

                <form id="main-contact-form" class="contact-form" name="editPayForm" method="get"
                      action="../controlador/data_edit_controller.php">
                    <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"]?>">

                    <div class="form-group">
                        <p>
                            <label for="modrgst_userTtlr">Nombre </label>
                            <input id="modrgstr_userTtlr" type="text" name="userName" class="inputbox" size="18"
                                   autocomplete="off" value="<?php echo $namePay ?>">
                        </p></div>

                    <div class="form-group">
                        <p><label for="modrgstr_userage">Edad</label>
                            <input id="modrgstr_userare" type="text" name="ageUser" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>
                    
                <div class="col-sm-5">
                    <div class="form-group"><p>
                            <label for="modrgst_userNmrcnt">Dirección</label>
                            <input id="modrgstr_useradress" type="text" name="adressUser" class="inputbox" size="18"
                                   autocomplete="off">
                    </p></div>

                    <div class="form-group"><p>
                            <label for="modrgst_userphone">Número de celular</label>
                            <input id="modrgstr_userphone" type="text" name="phoneUser" class="inputbox" size="18"
                                   autocomplete="off">
                    </p></div>

                    <div class="form-group"><p>
                            <label>Género</label>
                            <input name="genderUser" type="radio" id="Genero" value="M"> Masculino</input>
                            <input name="genderUser" type="radio" id="Genero" value="F"> Femenino</input>
                            <input name="genderUser" type="radio" id="Genero" value="O" checked> Otro</input>
                    </p></div>

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


                </div>
                  <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Confirmar</button>
                  <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"  onclick="editPetForm.action='../controlador/pet_delete_controller.php';">Eliminar</button>
            <button type="getnow" name="cancel" class="btn btn-primary btn-lg" required="required" onclick="editPetForm.action='../profile.php';">Cancelar</button>
                </div>


            </div>
        </div>
</div>

    </div>
    </form>
    </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->