$("#enviar").on("click", function () {
    $("#datos").validate({
        rules: {
            operando1: {
                required: true,
                number : true,
                
            },
            operando2: {
                required: true,
                number : true,
            },
        },
        messages: {
            operando1: {
                required: "* No hay suficientes datos *",
                number : "Sólo puedes ingresar números",

            },
            operando2: {
                required: "* No hay suficientes datos *",
                number : "Sólo puedes ingresar números",
            },
        },
        errorElement: "span",
        errorClass: "error",
        errorPlacement: function (error,
            element) {
            error.insertAfter(element);
        },
        submitHandler: function () {
            var parametros = $("#datos").serialize();
            $.ajax({
                url: "checarPalabra.php",
                type: 'POST',
                data: parametros,
                success: function (respuesta) {
                    alert(respuesta)
                }
            });
        }
    });
});