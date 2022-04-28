<style>
    body {
        background-image: url("../img/FondoHuellitas.png");
}

.contenedor {
    max-width:50%;
    margin:0 auto;
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

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">

                    <div class="form-group">
                        <p>
                        <label for="modrgst_petname">Nombre </label>
                        <input id="modrgstr_petname" type="text" name="namePet" class="inputbox" size="18" autocomplete="off">
</p>   </div>

                    <div class="form-group"> <p>
                            <label for="modrgst_petage">Edad</label>
                            <input id="modrgstr_petage" type="text" name="agePet" class="inputbox" size="18" autocomplete="off">
</p>    </div>

                    <div class="form-group"><p>                     
                         <div class="btn-group">
                             <button type="button" id="modrgstr_petRace" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Raza <span class="caret"></span></button>
                                 <ul class="dropdown-menu" role="menu">
                                     <li><a href="#">Pastor Aleman</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#">Chihuahua</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#">Caniche</a></li>
                                     <li class="divider"></li>
                                     <li><a href="#">Otro</a></li>        
                                 </ul>
                         </div></p>
                  </div>

                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->