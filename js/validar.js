function validar(){
        var modlgn_username = document.getElementById("modlgn_username").value;
        var modlgn_passwd = document.getElementById("modlgn_passwd").value;

        expresion = /\w+@\w+\.+[a-z]/;
        
        if (modlgn_username === "" && modlgn_passwd === ""){
                alert("Todos los campos son obligatorios");
                return false;    
                }
        
                    else if(modlgn_username === ""){
                        alert("Para iniciar sesión debes colocar un correo");
                        return false; 
                    }
        
                    else if(modlgn_passwd === ""){
                        alert("Se debe ingresar una contraseña");
                        return false;    
                    } 

                    else if(!expresion.test(modlgn_username)){
                        alert("Correo no valido");
                        return false;    
                    }
}