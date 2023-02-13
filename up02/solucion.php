<?php
//http://localhost/php-exercises-master/php-01-review/up02/solucion.php?number=2.5
if(isset($_GET["number"])){
    $number = $_GET ["number"];
    //comprobar si es numerico/es entero | intval coge parte entera
   if( is_numeric($number) && is_integer(intval($number))){
    if($number %2 == 0){
        echo "$number  es par";
    }else{
        echo "$number  no es par";
    }
}else{
    echo "El valor no es un numero entero";
}
}else{
    echo "Necesito que me pases un numero";
}

// Empieza aquí a escribir tu código PHP...