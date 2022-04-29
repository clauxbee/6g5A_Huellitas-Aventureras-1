expresion = /\w+@\w+\.+[a-z]/;

function validarLogin() {
    var modlgn_username = document.getElementById("modlgn_username").value;
    var modlgn_passwd = document.getElementById("modlgn_passwd").value;

    if (modlgn_username === "" && modlgn_passwd === "") {
        alert("Todos los campos son obligatorios");
        return false;
    } else if (modlgn_username === "") {
        alert("Para iniciar sesión debes colocar un correo");
        return false;
    } else if (modlgn_passwd === "") {
        alert("Se debe ingresar una contraseña");
        return false;
    } else if (!expresion.test(modlgn_username)) {
        alert("Correo no valido");
        return false;
    }
}

function validateRegister(name, age, gender, mail, passOne, passTwo) {
    var errorMessage;
    var valid = false;

    if (name.value == "")
        errorMessage += "Debe introducir su nombre.\n"
    if (age.value == "")
        errorMessage += "Debe introducir su edad.\n"
    if (gender[0].checked == false && gender[1].checked == false && gender[2].checked == false)
        errorMessage += "Debe seleccionar su género.\n"
    if (mail.value == "")
        errorMessage += "Debe introducir su correo.\n"
    if (!expresion.test(modlgn_username))
        errorMessage += "Correo no valido.\n";
    if (passOne.value == "")
        errorMessage += "Debe introducir una contraseña.\n";
    else {
        if (passTwo.value == "")
            errorMessage += "Debe repetir su contraseña.\n";
        else {
            if (passOne.value != passTwo.value)
                errorMessage += "Las contrseñas no coinciden.\n";
        }
    }

    if (errorMessage = "")
        valid = true;
    else
        alert(errorMessage)


    return valid;
}