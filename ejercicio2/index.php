<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- <link rel="stylesheet" href="../css/estilo.css"> -->
    <link rel="stylesheet" href="../css/estilo2.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../pina.png">
    <title>Document</title>
</head>
<body>
    <?php include_once("../layout/nav2.php")?>
    <div class="container bodys">
        <a name="index"></a>
        <!-- background con imagen -->
        <div class="container col-md-6 mt-3 p-3 animated bounceInDown">
            <div class="card text-white fondocard">
                <div class="card-header text-center bg-primary"><h1>Ingresa Aquí</h1></div>
                <div class="card-body ">
                    <form id="registrarAdm">
                        <div class="form-group col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
                                <input type="password" name="pwdUsr" id="pwdUsr" placeholder="Contraseña" class="form-control inputs" /> </div>
                        </div>
                        <!-- </div>
                            <div class="form-row"> -->


                        <input type="hidden" name="accion" value="insertar">
                        <div class="card-footer blancoo">
                            <div class="input-group mt-3">
                                <div type="button" class="btn btn-outline-primary btn-block" id="mostrar" name="mostrar"><i class="fas fa-eye"></i> Mostrar Contraseña</div>
                                <!-- <div class="btn btn-danger bo" id="mostrar" name="mostrar"><i class="fas fa-eye"></i> Mostrar Contraseña</div> -->
                                <!-- <button class="btn btn-danger btn-m float-right" id="mostrar"><i class="fas fa-eye"></i> Mostrar Contraseña</button> -->
                                <span class="row" id="mensaje"></span>
                            </div>
                            <div class="input-group mt-3">
                                <button type="submit" class="btn btn-outline-secondary btn-block" id="enviar" name="enviar"><i class="fas fa-arrow-alt-circle-right"></i>Iniciar Sesión</button>
                                <div class="input-group mt-3">
                                    <!-- <a class="nav-link text-primary" href="cambiarContra.php">¿Olvidaste tu contraseña?</a> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.1.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>

    <script src="../js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="./js/validarRegistro.js"></script> -->
    <script src="../js/validarAdm.js"></script>
</body>

</html>