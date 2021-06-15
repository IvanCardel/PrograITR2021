<?php
$str = $_POST['palabra'];

// $str = ' ab cd ';
// echo strlen($str); 
// 7
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
    
    <div class="container mt-3 col-8">
        <div class="card">
            <div class="card-header bg-primary">
                <h1>La palabra es:</h1>
            </div>
            <div class="card-body">
            <input type="text" class="form-control" name="palabra" id="palabra" value="<?php echo strlen($str);?>">
    </div>
    <div class="container col-8 text-black">
        <pre>
            <code>
< ?php
$str = $_POST['palabra'];
echo strlen($str);
?>  
            </code>
        </pre>
            </div>
        </div>
    </div>
 </body>
 </html>
  
 