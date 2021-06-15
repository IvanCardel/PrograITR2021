<?php
function mb_strrev($cadena){
    $r = '';
    for ($i = mb_strlen($cadena); $i>=0; $i--) {
        $r .= mb_substr($cadena, $i, 1);
    }
    return $r;
}
?> 
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
     <?php include_once("../layout/nav2.php")?>
    
    <div class="container mt-3 mb-5 col-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h1>La palabra es:</h1>
            </div>
            <div class="card-body">
            <input type="text" class="form-control" name="palabra" id="palabra" value="<?php echo mb_strrev($palabra = $_POST["palabra"]);?>">
    </div>
    <div class="container col-8 text-black">
        <pre>
            <code>
Código de la función que cambia la palabra
< ?php
function mb_strrev($cadena){
    $r = '';
    for ($i = mb_strlen($cadena); $i>=0; $i--) {
        $r .= mb_substr($cadena, $i, 1);
    }
    return $r;
}
   
       < h1 class="title">
            La palabra es:
       < /h1>
           < input type="text" class="form-control" name="palabra" id="palabra" value="< ?php echo mb_strrev($palabra = $_POST["palabra"]);?>">
    
            </code>
        </pre>
            </div>
        </div>
    </div>
 </body>
 </html>
  
 