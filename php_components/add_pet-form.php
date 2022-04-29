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
            <h2 class="title">Agrega a tu mascota</h2>
        </div>

        <div class="row contact-wrap">

            <div class="status alert alert-success" style="display: none"></div>

            <div class="col-sm-5 col-sm-offset-1">

                <div style=" padding:1px; background-color:#65AAF0; line-height:1.4;">
                    <br>
                </div>
                <img src="img/peticon.png" width="500" height="220">

                <div style=" padding:1px; background-color:#65AAF0; line-height:2.5;">
                    <br></div>
            </div>

            <div class="col-sm-5">

                <p>Ingresa los datos de tu peludito:</p>

                <form id="main-contact-form" class="contact-form" name="addPetForm" method="get"
                      action="../controlador/pet_add_controller.php">
                    <input type="hidden" name="userID">

                    <div class="form-group">
                        <p>
                            <label for="modrgst_petname">Nombre </label>
                            <input id="modrgstr_petname" type="text" name="namePet" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>

                    <div class="form-group"><p>
                            <label for="modrgst_petage">Edad</label>
                            <input id="modrgstr_petage" type="text" name="agePet" class="inputbox" size="18"
                                   autocomplete="off">
                        </p></div>

                    <div class="form-group"><p>
                            <label for="modrgst_petage">Raza</label>
                            <input id="modrgstr_petAge" type="text" name="petRace" class="inputbox" size="18"
                                   autocomplete="off">
                        </p>
                    </div>

            </div>
            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required" onclick="userID.value = <?php echo $_SESSION["userID"]?>">Confirmar</button>
            <button type="getnow" name="cancel" class="btn btn-primary btn-lg" required="required" onclick="addPetForm.action='../profile.php';">Cancelar</button>
        </div>

    </div>
    </form>
    </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->