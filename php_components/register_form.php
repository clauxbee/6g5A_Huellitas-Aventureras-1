<section class="contact-page">
    <div class="container">
        <div class="text-center">
        <h2 class="title">Crea tu cuenta</h2>
             
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                <img src = img/regIcon.png>
                <p>Ingresa los siguientes datos</p>
                    <div class="form-group">
                    <p>  <label for="modrgstr_username">Nombre</label>
                               <input id="modrgstr_username" type="text" name="nombreUser" class="inputbox" size="18" autocomplete="off"> </p>
                        </div>
                    <div class="form-group">
                           <p> <label for="modrgstr_userage">Edad</label>
                                 <input id="modrgstr_userare" type="text" name="ageUser" class="inputbox" size="18" autocomplete="off">
                 </p> </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        
                        <label>Dirección </label> <p>
                        <input id="modrgstr_useradress" type="text" name="adressUser" class="inputbox" size="18" autocomplete="off">
</p>   </div>
                    <div class="form-group"> <p>
                            <label for="modrgst_userphone">Número de celular</label>
                            <input id="modrgstr_userphone" type="text" name="phoneUser" class="inputbox" size="18" autocomplete="off">
</p>    </div>
                    <div class="form-group">
                        <p>
                                 <label>Género</label>
                                <input name="Genero" type="radio" id="Genero" value="Masculino"> Masculino</input>
                                <input name="Genero" type="radio" id="Genero" value="Femenino"> Femenino</input>
                                <input name="Genero" type="radio" id="Genero" value="Otro"> Otro</input>
                        </p>
                  </div>
                    <div class="form-group">  <p>
                                <label for="modrgstr_useremail">Correo</label>
                                <input id="modrgstr_useremail" type="text" name="email" class="inputbox" size="18" autocomplete="off">
</p> </div>

                    <div class="form-group"> <p>
                                     <label for="modrgstr_passwd">Contraseña</label>
                                    <input id="modrgstr_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
</p> </div>

                    <div class="form-group"> <p>
                                    <label for="modrgstr_passwd">Repetir contraseña</label>
                                    <input id="modrgstr_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
</p> </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Registrarse</button>
                    </div>

                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->