<?php
        
        
        $texto = $_POST["palabra"];
            echo "Contando letras de: '$texto'\n";
            $letras = "abcdefghijklmnopqrstuvwxyz";
            $letras .= strtoupper($letras);
            for ($i = 0; $i < strlen($letras); $i++) {
                $letra = $letras[$i];
                $contador = 0;
                for ($x = 0; $x < strlen($texto); $x++) {
                    $actual = $texto[$x];
                    if ($actual === $letra) {
                        $contador++;
                    }
            
                }
                if ($contador > 0) {
					echo "<br>";
                    echo "$letra=";
                    echo $contador;
                    echo "<br>";
                }
            }