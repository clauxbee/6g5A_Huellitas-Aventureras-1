function valSR(){
    var petName = document.getElementById("petName").value;
    var rider = document.getElementById("rider").value;
    var duration = document.getElementById("duration").value;
    var addres = document.getElementById("addres").value;
    var extraHints = document.getElementById("extraHints").value;
    
    if (petName === "" && rider === "" && duration === "" && addres === "" && extraHints === ""){
            alert("Debe llenar el resto de los campos.");
            return false;    
            }
    
                else if(petName === ""){
                    alert("El campo del nombre de la mascota esta vacio.");
                    return false; 
                }
                else if(rider === ""){
                    alert("El campo del paseador esta vacio.");
                    return false; 
                }
                else if(duration === ""){
                    alert("El campo de la duración del paseo esta vacio.");
                    return false; 
                }

                else if(addres === ""){
                    alert("El campo de la dirección esta vacio.");
                    return false; 
                }
    
                else if(extraHints === ""){
                    alert("El campo de las indicaciones extra esta vacio.");
                    return false;    
                } 
            }