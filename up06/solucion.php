<?php

$colores = ['blanco', 'verde', 'rojo'];

// Empieza aquí a escribir tu código PHP...
//buscamos en php.net implode para que saque con comas
//se podia haber hecho como un bucle
echo implode(",", $colores);

//2a parte buscar para ordenar -> sort ordena un array
//cuando haces un sort directamente te lo almacena haces sort del array y te modifica el arrray original
sort($colores);
echo "<ul>";
foreach($colores as $color){
    echo "<li>$color</li>";
}
echo "</ul>";
//http://localhost/php-exercises-master/php-01-review/up06/solucion.php