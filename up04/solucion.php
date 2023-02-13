<?php

// Empieza aquí a escribir tu código PHP...
$ficheros = [
    "Ana.db",
    "pepe.exe"
];

foreach($ficheros as $fichero){
    //buscar funcion de php que nos diga donde está el punto
    $point = strpos($fichero, "."); //fichero donde quiero buscar "." lo que quiero buscar
    $extension = substr($fichero,$point);//obtendremos una substring ->substr fichero es el dato y point la posicion
//esto nos da una extensión ahora tenemos que poner el nombre may o min segun extension
    if($extension == ".exe"){
        echo strtoupper($fichero)."<br>"; //buscar la funcion de poner en mayusculas uppercase-> strtoupper
    }else if($extension == ".db"){
        echo strtolower($fichero)."<br>";
    }

}; 
//http://localhost/php-exercises-master/php-01-review/up04/solucion.php