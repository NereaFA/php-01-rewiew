<?php

$paises = [
    "Italy"          => "Rome",
    "Luxembourg"     => "Luxembourg",
    "Belgium"        => "Brussels",
    "Denmark"        => "Copenhagen",
    "Finland"        => "Helsinki",
    "France"         => "Paris",
    "Slovakia"       => "Bratislava",
    "Slovenia"       => "Ljubljana",
    "Germany"        => "Berlin",
    "Greece"         => "Athens",
    "Ireland"        => "Dublin",
    "Netherlands"    => "Amsterdam",
    "Portugal"       => "Lisbon",
    "Spain"          => "Madrid",
    "Sweden"         => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus"         => "Nicosia",
    "Lithuania"      => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia"        => "Tallin",
    "Hungary"        => "Budapest",
    "Latvia"         => "Riga",
    "Malta"          => "Valetta",
    "Austria"        => "Vienna",
    "Poland"         => "Warsaw",
];

// Continua...
//https://www.php.net/manual/es/array.sorting.php 
//para ordenar el array por distintos tipos de valores
//hacemos asort de paises para ordenar por paises manteniendo la key
//ksort para ordenar por la key
asort($paises); // sort($paises); ordena pero nos machaca la key, necesitamos uno que mantenga la asociacion de la key
//var_dump($paises); //imprime todo el array

foreach($paises as $pais=>$capital){ //$pais=>$capital capital value
    echo "La capital de $pais es $capital<br>";
} 
//http://localhost/php-exercises-master/php-01-review/up07/solucion.php
