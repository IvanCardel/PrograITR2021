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
                <h1>Suma de dos números</h1>
            </div>
            <div class="card-body">
                <form class="form" method="POST" id="datosCotizacion" action="checarPalabra.php">
                    <div class="mb-3">
                      <label for="num1" class="form-label">Ingresa el primer número</label>
                      <input type="number" class="form-control" name="num1" id="num1" aria-describedby="emailHelp" required>
                      <div id="emailHelp" class="form-text">Descripción</div>
                      
                      <label for="num2" class="form-label">Ingresa el primer número</label>
                      <input type="number" class="form-control" name="num2" id="num2" aria-describedby="emailHelp" required>
                      <div id="emailHelp" class="form-text">Descripción</div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" id="enviar">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>