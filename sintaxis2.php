<?php

    //Métodos de array (existen más útiles, ver DOCUMENTACIÓN OFICIAL DE PHP)
    $array = [1,2,3];
    list($a, $b, $c) = $array; // <- Le asigna a cada variable argumento el VALOR según el índice del array especificado con => $array
    echo $c . "<br>";

    $array = range(1, 10); // <- Rellena un array según los argumentos que le pasemos en un RANGO de números (1-3, 50-80, etc)
    var_dump($array);

    echo "<br>" . count($array); // <- Cuenta los elementos de un array

    $array = ['Maxi', 'Agus'. 'Thiago'];
    if (in_array('Maxi', $array)){ // <- in_array() comprueba si se encuentra cierta expresión (argumento 1 del método) en cierto array (argumento 2 del método)
        echo "<br> Se encuentra";
    }
    else{
        echo "<br>No se encuentra";
    }

    unset($array[0]); // <- Elimina un elemento del array por ÍNDICE
?>