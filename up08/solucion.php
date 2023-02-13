<?php

$cadenas = ["patata", "cebolla", "sal", "pimienta", "te", "agua"];

// Continua...
$shorterWord =""; //como la menor esta vacia comprobar que la shorterword sea mayor que cero o distinto de vacio
$longerWord = "";

foreach($cadenas as $word){
    $length = strlen($word);
    $shorterWord = ($length < strlen($shorterWord) || strlen($shorterWord) == 0)? $word : $shorterWord;
    $longerWord = $length > strlen($longerWord) ? $word : $longerWord;
}
echo "La palabra mas larga es $longerWord y la palabra mas corta es $shorterWord";
//http://localhost/php-exercises-master/php-01-review/up08/solucion.php
