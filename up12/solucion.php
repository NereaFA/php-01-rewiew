<?php

// Empieza aquí a escribir tu código PHP...

$number=5;
function factorial($number){
    if($number === 0){
        return 1;
    }
    return factorial($number-1) * $number;
}
echo "Este es el factorial de $number ".factorial($number);
//va a hacer 5 * 4,5*3,5*2
//http://localhost/php-exercises-master/php-01-review/up12/solucion.php