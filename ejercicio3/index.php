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
    <div class="container mt-5 col-6">
    <?php
        $ar1[] = array("0","1","2","3");
        $res = array_icount_values ($ar1);
        print_r($res);

        function array_icount_values($arr,$lower=true) {
             $arr2=array();
             if(!is_array($arr['0'])){$arr=array($arr);}
             foreach($arr as $k=> $v){
              foreach($v as $v2){
              if($lower==true) {$v2=strtolower($v2);}
              if(!isset($arr2[$v2])){
                  $arr2[$v2]=1;
              }else{
                   $arr2[$v2]++;
                   }
            }
            }
            return $arr2;
        }
    ?>
    </div>
</body>
</html>