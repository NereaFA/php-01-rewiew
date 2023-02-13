<?php

// Empieza aquí a escribir tu código PHP...
$number = $_GET["number"]; //123321

//1234 5 4321 impar
//12 21 par
//123 impar
$long = strlen($number);
$cad1 = substr($number,0,intval($long/2)); //lo que quiere recorer, 0 la posicion inicial, y longitud
//buscar funcion para que coja el entero intval//strrev para que coja del final
$cad2 = strrev(substr($number,-intval($long/2))); // pone el menos para que empiece por el final

if($cad1==$cad2){
    echo "$number es palíndromo";
}else{
    echo "$number no es palíndromo";
}
//http://localhost/php-exercises-master/php-01-review/up05/solucion.php?number=123321

//OTRA FORMA CON FOREACH
// foreach($number as $index=>$digit){

// }