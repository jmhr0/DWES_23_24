<?php

$numeros = array(4, 5, 7, 10, 60, 90);

unset($numeros[3]);

$numeros[3] = 10;

foreach ($numeros as $numero)
    echo $numero;
echo "<br>";



?>