<header id="header">
    <?php session_start() ?>
    <nav class="navbar navbar-default navbar-static-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand" style="height: 50px; margin: 15px; padding: 0">
                    <a href="index.php">
                        <img src="..\img\favicon.png" alt="Huellitas Aventureras" style="height: 100%;">
                    </a>
                    <?php
                    if (isset($_SESSION["userMail"]) && !empty($_SESSION["userMail"])){
                    ?>
                    <p style="text-align: center; color: black;">Usuario: <?php echo $_SESSION["userName"]; ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <div class="menu">
                    <?php
                    if (isset($_SESSION["userMail"]) && !empty($_SESSION["userMail"])){
                        ?>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="index.php">Inicio</a></li>
                            <li role="presentation"><a href="servicios.php">Solicitar Servicio</a></li>
                            <li role="presentation"><a href="blog.php">Blog</a></li>
                            <li role="presentation"><a href="marketing.php">Marketing</a></li>
                            <li role="presentation"><a href="cuenta.php">Cuenta</a></li>
                            <li role="presentation"><a href="profile.php">Perfil</a></li>
                            <li role="presentation"><a href="../controlador/session_destroy.php">Cerrar Sesión</a></li>
                        </ul>

                        <?php
                    } else {
                        ?>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="index.php">Inicio</a></li>
                            <li role="presentation"><a href="blog.php">Blog</a></li>
                            <li role="presentation"><a href="login.php">Iniciar Sesión</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

