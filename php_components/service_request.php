<section class="contact-page">
<script src="js/validSR.js"></script>
    <div class="container">
        <div class="text-center">
            <h2>Solicitud de Paseo</h2>
            <p>Rellene los campos necesarios para solicitar un paseo para su mascota.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" onsubmit="return valSR();">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nombre de la Mascota *</label>
                        <input id="petName" type="text" name="petName" class="form-control" placeholder="Mascota">
                    </div>
                    <div class="form-group">
                        <label>Hora de Inicio *</label>
                        <input id="starHour" type="text" name="startHour" class="form-control" placeholder="HH:MM am" required="required">
                    </div>
                    <div class="form-group">
                        <label>Seleccione el Paseador *</label>
                        <input id="rider" type="text" name="rider" class="form-control" placeholder="Paseador">
                    </div>
                    <div class="form-group">
                        <label>Duración del Paseo (Minutos) *</label>
                        <input id="duration" type="text" name="duration" class="form-control" placeholder="Máximo 120">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Dirección *</label>
                        <input id="addres" type="text" name="addres" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Inidicaciones Extra</label>
                        <textarea name="extraHints" id="extraHints" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Solicitar</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->