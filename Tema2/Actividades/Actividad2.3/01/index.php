<?php
    /*
    Ejercicio 1. Conversiones de datos en expresiones.

Crear un script PHP donde se muestre el tipo de dato y resultado de las siguientes 
expresiones matemáticas:
- Multiplica valor entero con una cadena que contiene un número inicial
- Sumar valor entero con cadena con número inicial
- Sumar valor entero con valor float
- Concatenar valor entero con cadena
- Sumar valor entero con valor booleano
    */
    echo "<center><h1>Actividad 2.3()</h1></center>";
    echo "<h3>Multiplica valor entero con una cadena que contiene un número inicial</h3>";
    $valor1= 1*"2";
    var_dump($valor1);
    echo "<h3>Sumar valor entero con cadena con número inicial</h3>";
    $valor2= "1" + 2;
    var_dump($valor2);
    echo "<h3>Sumar valor entero con valor float</h3>";
    $valor3= 1 + 2.50;
    var_dump($valor3);
    echo "<h3>Concatenar valor entero con cadena</h3>";
    $valor4= 1 ." Hola";
    var_dump($valor4);
    echo "<h3>Sumar valor entero con valor booleano</h3>";
    $valor5= 1 + true;
    var_dump($valor5);
?>