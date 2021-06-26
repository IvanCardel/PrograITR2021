<?php 
$variable2 = $_POST["pwdUsr"];
$file = fopen("datos.txt", "w");
fwrite($file, $variable2  . PHP_EOL);
fclose($file);

?>