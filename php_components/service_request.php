<section class="contact-page">
    <div class="container">
        <div class="text-center">
            <h2>Solicitud de Paseo</h2>
            <p>Rellene los campos necesarios para solicitar un paseo para su mascota.</p>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nombre de la Mascota *</label>
                        <input type="text" name="petName" class="form-control" required="required" placeholder="Mascota">
                    </div>
                    <div class="form-group">
                        <label>Hora de Inicio *</label>
                        <input type="text" name="startHour" class="form-control" required="required" placeholder="HH:MM am">
                    </div>
                    <div class="form-group">
                        <label>Seleccione el Paseador *</label>
                        <input type="text" name="rider" class="form-control" required="required" placeholder="Paseador">
                    </div>
                    <div class="form-group">
                        <label>Duración del Paseo (Minutos) *</label>
                        <input type="text" name="duration" class="form-control" required="required" placeholder="Máximo 120">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Dirección *</label>
                        <input type="text" name="addres" class="form-control" required="required">
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