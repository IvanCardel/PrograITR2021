<?php //Ejemplo aprenderaprogramar.com

$file = fopen("datos.txt", "r");

while(!feof($file)) {

echo fgets($file). "<br />";

}

fclose($file);

?>