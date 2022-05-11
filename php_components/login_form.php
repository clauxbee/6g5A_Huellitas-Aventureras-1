<?php
if ($_SESSION["LoginError"]=="true") {
    echo "<div class='col-md-12' style='padding:20px; background-color:#A33D3D; line-height:1; color: white; font-weight: bold;'>".
            $_SESSION["LoginErrorString"]
          ."</div>";
    $_SESSION["LoginError"]="false";
}
?>
<div class="main">
<div class="container">
    
    <div class="shop_top">
    
            <div class="col-md-6">
                <div class="login-page">
                    <script src="js/validar.js"></script>
                    <br> <br>
                    <h4 class="title">Nuevos miembros</h4>
                    <br>
                    <p>Queremos lo mejor para tu peludito, es por ello que en "Huellitas aventureras" nos empeñamos
                        todos los días en hacerlo sentir bien y cuidarlos como si fueran nuestros. Piensa en tu peludito
                        y regalale un paseo con los mejores paseadores de la ciudad, forma parte de nuestra gran
                        familia</p>

                    <div class="btnn">
                        <a href="register.php">
                            <button type="getnow" name="subscribe" class="btn btn-primary btn-lg" required="required">
                                Crear una cuenta
                            </button>
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="login-title">
                    <br> <br>
                    <h4 class="title">¿Ya tienes una cuenta? Inicia sesión</h4>

                    <br>
                    <div id="loginbox" class="loginbox">
                        <form action="../controlador/login_controller.php" method="post" name="login" id="login-form"
                              onsubmit="return validarLogin();">
                            <fieldset class="input">
                                <p id="login-form-username">
                                    <label for="modlgn_username">Correo</label>
                                    <input id="modlgn_username" type="email" name="email" class="inputbox" size="18"
                                           autocomplete="off">
                                </p>
                                <p id="login-form-password">
                                    <label for="modlgn_passwd">Contraseña</label>
                                    <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18"
                                           autocomplete="off">
                                </p>
                                <div class="remember">
                                    <p id="login-form-remember">
                                        <label for="modlgn_remember"><a href="#">¿Olvidaste tu contraseña? </a></label>
                                    </p>

                                    <button href="inicio.html" type="getnow" name="subscribe"
                                            class="btn btn-primary btn-lg" required="required">Iniciar sesión
                                    </button>
                                    <br><br><br><br>

                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

</div>

<script src="../js/validar.js"></script>