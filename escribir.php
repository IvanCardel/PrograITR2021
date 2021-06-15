<?php //Ejemplo aprenderaprogramar.com, archivo escribir.php
$variable2 = "Ejemplo de escribiraaa";
$file = fopen("datos.txt", "w");

fwrite($file, $variable2  . PHP_EOL);

fwrite($file, "Otra más" . PHP_EOL);

fclose($file);

?>