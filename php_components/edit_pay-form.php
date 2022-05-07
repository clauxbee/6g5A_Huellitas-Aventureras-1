<?php session_start();
$payIndex = $_SESSION["userPays"][$_GET["paysArrayIndex"]][0];
$_SESSION["editPayIndex"] = $_GET["payIndex"];
$namePay = $_SESSION["userPays"][$_GET["paysArrayIndex"]][1];
$typePay = $_SESSION["userPays"][$_GET["paysArrayIndex"]][2];
$numberPay = $_SESSION["userPays"][$_GET["paysArrayIndex"]][3];
$cvvPay = $_SESSION["userPays"][$_GET["paysArrayIndex"]][4];
?>
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
                <img style="width: 100%;" src="img/iconCard.png" width="500" height="220">

                <div style=" padding:1px; background-color:#65AAF0; line-height:2.5;">
                    <br></div>
            </div>

            <div class="col-sm-5">

                <p>Datos de tu método de pago:</p>

                <form id="main-contact-form" class="contact-form" name="editPayForm" method="get"
                      action="../controlador/payment_edit_controller.php">
                    <input type="hidden" name="userID" value="<?php echo $_SESSION["userID"] ?>">

                    <div class="form-group">
                        <p>
                            <label for="modrgst_userTtlr">Titular </label>
                            <input id="modrgstr_userTtlr" type="text" name="namePay" class="inputbox" size="18"
                                   autocomplete="off" value="<?php echo $namePay ?>">
                        </p></div>

                    <div class="form-group"><p>
                            <label for="modrgst_userMtdpg">Método de pago:</label>
                            <input id="modrgst_userMtdpg" type="text" name="typePay" class="inputbox" size="18"
                                   autocomplete="off" value="<?php echo $typePay ?>">
                        </p>
                    </div>

                    <div class="form-group"><p>
                            <label for="modrgst_userNmrcnt">Número de cuenta o CLABE</label>
                            <input id="modrgst_userNmrcnt" type="text" name="numberPay" class="inputbox" size="18"
                                   autocomplete="off" value="<?php echo $numberPay ?>">
                        </p>
                    </div>

                    <div class="form-group"><p>
                            <label for="modrgst_userCvv">CVV</label>
                            <input id="modrgst_userCvv" type="text" name="cvvPay" class="inputbox" size="18"
                                   autocomplete="off" value="<?php echo $cvvPay ?>">
                        </p>
                    </div>

            </div>
            <p style="text-align: right;">
            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">Confirmar</button>
            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required"
                    onclick="editPayForm.action='../controlador/payment_delete_controller.php';">Eliminar
            </button>
            <button type="getnow" name="cancel" class="btn btn-primary btn-lg" required="required"
                    onclick="editPayForm.action='../profile.php';">Cancelar
            </button>
            </p>
        </div>


    </div>
    </div>


    </div>
    </form>
    </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->