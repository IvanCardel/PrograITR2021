<?php
	$operando1 = $_POST['operando1'];
	$operando2 = $_POST['operando2'];
    if ($operando2 ==0)
    {
        echo  "No se puede dividir";

    }else{

    
	$operador = $_POST['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ".$solucion;
}
?>
 