<?php

// Empieza aquí a escribir tu código PHP...
if(isset($_GET["number"])){
    $number = $_GET ["number"];
   if( is_numeric($number)){
    $index = 0;
    $result = 1;
    while($result <= 10000){
        $result = $result * $number;
        $index ++;
    }
    echo "El numero $number elevado $index veces es $result";
   }
}else{
    echo "Necesito que me pases un numero";
}
//http://localhost/php-exercises-master/php-01-review/up03/solucion.php?number=5