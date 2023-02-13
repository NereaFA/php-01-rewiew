<?php

// Empieza aquí a escribir tu código PHP...

//$fn1 = fn($x) => $x + $y;

$array = [3,5,18,52,23,45];

function myFunction($array){
    $result = 0;
    foreach($array as $num){
        $result += $num; //+= recibimos el valor anterior mas el siguiente
    }
    return $result;
};
echo "El resultado de la suma de ".implode(" + ", $array) . " es ". myFunction($array);

//http://localhost/php-exercises-master/php-01-review/up10/solucion.php