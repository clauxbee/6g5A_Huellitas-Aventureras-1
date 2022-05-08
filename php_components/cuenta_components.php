<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="col-md-6">
                <div class="Cuenta_components-page">
                    <br>
                    <fieldset class="input">

                        <div style=" margin-top:25px;  padding:5px; background-color:#65AAF0; line-height:1.4;">
                            <h4 style="margin: rigth 30px;"> Mascotas</h4>
                        </div>
                        <div style=" padding:20px; background-color:#f2f2f2; line-height:1;">
                            <form method="get" action="../edit-pet.php">
                                <input type="hidden" name="petIndex">
                                <table width="100%">
                                    <?php
                                    $pets = $_SESSION["userPets"];
                                    for ($i = 0; $i < sizeof($_SESSION["userPets"]); $i++) { ?>
                                        <tr>
                                            <td style="padding-top: 1.5em"><p> <?php echo $_SESSION["userPets"][$i][1]; ?> </p></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </form>

                        </div>
                        <div style=" margin-bottom:10px; padding:2em; background-color:#65AAF0; line-height:1;">
                        </div>
                        <div class="clear"></div>

                    </fieldset>

                </div>
            </div>

            <div class="clear"></div>

            <div class="container">
                <div class="col-md-6">
                    <div class="Cuenta_components-page">
                        <br>
                        <fieldset class="input">

                            <div style=" margin-top:25px;  padding:5px; background-color:#65AAF0; line-height:1.4;">
                                <h4 style="margin: rigth 30px;"> Paseos en curso</h4>
                            </div>
                            <div style=" padding:20px; background-color:#f2f2f2; line-height:1;">
                                <?php
                                $rides = $_SESSION["userRides"];
                                for ($i = 0; $i < sizeof($_SESSION["userRides"]); $i++) { ?>
                                    <p> <b>Mascota:</b> <?php echo $_SESSION["userRides"][$i][5]; ?>. <b>Duración:</b> <?php echo $_SESSION["userRides"][$i][1]; ?> min. </p>
                                <?php } ?>
                            </div>

                            <div style=" margin-top:25px;  padding:5px; background-color:#65AAF0; line-height:1.4;">
                                <h4 style="margin: rigth 30px;"> Paseos finalizados</h4>
                            </div>
                            <div style=" padding:20px; background-color:#f2f2f2; line-height:1; margin-bottom: 10px;">
                                <p>
                                    No se ha finalizado ningún paseo.
                                </p>
                            </div>


<!--                            <div style=" margin-top:25px;  padding:5px; background-color:#65AAF0; line-height:1.4;">-->
<!--                                <h4 style="margin: rigth 30px;"> Detalles del paseo</h4>-->
<!--                            </div>-->
<!--                            <div style=" padding:20px; background-color:#f2f2f2; line-height:1;">-->
<!--                                <p>-->
<!--                                    Seleccione un paseo para visualizar sus detalles.-->
<!--                                </p>-->
<!--                            </div>-->
<!--                            <div style=" padding:1px; background-color:#65AAF0; line-height:1.4; margin-bottom: 10px;">-->
<!--                                <button type="getnow" name="editar_perfil" class="btn btn-primary btn-lg"-->
<!--                                        required="required"><p>Pagar servicio</p></button>-->
<!--                                <button type="getnow" name="editar_perfil" class="btn btn-primary btn-lg"-->
<!--                                        required="required"><p>Cancelar servicio</p></button>-->
<!---->
<!--                            </div>-->
                        </fieldset>

                    </div>
                </div>

                <div class="clear"></div>


            </div>
        </div>