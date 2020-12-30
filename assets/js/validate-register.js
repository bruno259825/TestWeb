"use strict";
let oBtnRegister = document.getElementById("btnRegister");
oBtnRegister.addEventListener("click", comprobar);

function comprobar() {
        let bValido = true;
        let sErrores = "";
        let oBtnRegister = document.getElementById("btnRegister");
        let sUserName = document.register.registerUsername.value.trim();
        let oRegExp = /(^[a-zA-ZñÑáéíóúÁÉÍÓÚ\d]{5,15})+$/;
        if (!oRegExp.test(sUserName)) {
                bValido = false;
                sErrores += "- Error en el nombre de usuario<br>";
        }

        let sName = document.register.registerName.value.trim();
        oRegExp = /(^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{0,50})+$/;
        if (!oRegExp.test(sName)) {
                bValido = false;
                sErrores += "- Error en el nombre<br>";
        }

        let sPassword = document.register.registerPassword.value;
        oRegExp = /(^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s\d]{5,14})+$/;
        if (!oRegExp.test(sPassword)) {
                bValido = false;
                sErrores += "- Error en la contraseña<br>";
        }

        let sEmail = document.register.registerEmail.value.trim();
        oRegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!oRegExp.test(sEmail)) {
                bValido = false;
                sErrores += "- Error en el email<br>";
        }

        if (!bValido) {
                
                mostrarErrores(sErrores);

        } else {

                $.ajax({
                        async: false,
                        data: { user: sUserName, name: sName, password: sPassword, email: sEmail },
                        url: "index.php?con=Alumno&act=registrarUsuario",
                        type: "POST",
                        success: function (response) {
                                //manejando los errores
                                let oJSON=JSON.parse(response);
                                console.log(oJSON);

                                let sRegistrado="";
                                if(oJSON.success){
                                        sRegistrado="- Registrado Correctamente";
                                }else{
                                        for(let sError of oJSON.errores){
                                                sRegistrado+=sError; 
                                        }
                                }
                                
                                mostrarErrores(sRegistrado);
                        }
                });
        }
}

function mostrarErrores(sRegistrado){
        if(sRegistrado="- Registrado Correctamente"){
                
                $(".card-header #error").html("¡Muy Bien!");
        }else{
                $(".card-header #error").html("Ha ocurrido un error");
        }
        
        document.register.reset();
        $('#modalRegister').modal('hide')
        $("#card-body").html(sRegistrado);
        $('#modalErrorLog').modal('show');
}