var estadoMostrar = 0;
$("#mostrar").on("click", function() {

    if (estadoMostrar == 0) {
        $("#pwdUsr").attr("type", "text");
        $("#mostrar").removeClass("btn-danger");
        $("#mostrar").addClass("btn-success");
        $("#mensaje").html("<span class='alert alert-info'>la contraseña es visible</span>");
        estadoMostrar = 1;
    } else {
        $("#pwdUsr").attr("type", "password");
        $("#mostrar").removeClass("btn-success");
        $("#mostrar").addClass("btn-danger");
        $("#mensaje").html("<h1 class='text-primary'>No se muestra la contraseña<h1/>");

        estadoMostrar = 0;
    }

});

$().ready(function() {

    $.validator.addMethod("formEmail", function(value, element) {
        var pattern = /^((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,64})$/;
        return this.optional(element) || pattern.test(value);
    }, "Formato incorrecto");


});

$("#enviar").on("click", function() {
    $("#registrarAdm").validate({
        rules: {
            pwdUsr: {
                required:true,
                formEmail:true,
            },
        },
        messages: {
            pwdUsr: {
                required: "Campo Requerido",
                formEmail: "Formato  incorrecto",
            },
        },
        
        errorElement: "span",
        errorClass: "error",
        errorPlacement: function(error,
            element) {
            error.insertAfter(element);
        },
        submitHandler: function() {
            var parametros = $("#registrarAdm").serialize();
            console.log(parametros)
            $.ajax({
                url: "../escribir.php",
                type: 'POST',
                data: parametros,
                success: function(respuesta) {
                    
                    window.location.replace("../datos.txt");
                }
            });
        }
    });
});