<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../pina.png">
    <title>Document</title>
</head>
<body>
    <?php include_once("../layout/nav2.php") ?>
    <div class="container mt-5 col-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h1>Covertir palabra</h1>
            </div>
            <div class="card-body">
                <form class="form" method="POST" id="datosCotizacion" action="checarPalabra.php">
                    <div class="mb-3">
                      <label for="palabra" class="form-label">Ingresa la palabra</label>
                      <input type="text" class="form-control" name="palabra" id="palabra" aria-describedby="emailHelp" required>
                      <div id="emailHelp" class="form-text">Ingresa una palabra y te regresaremos su equivalente pero invertida</div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" id="enviar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>