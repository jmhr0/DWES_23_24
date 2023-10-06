<?php

// Asignar a una variable un valor de cualquier tipo
$varEjemplo = "Hola mundo";

// Convertimos usando funciones de conversion 
$var1=intval($varEjemplo);
$var2=boolval($varEjemplo);
$var3=strval($varEjemplo);
$var4=floatval($varEjemplo);

// Mostramos su contenido
echo "<center><h1>Actividad 2.2</h1></center>";
echo "<h3>Mostramos el valor de las variables (funciones de conversión)</h3>";
var_dump($varEjemplo);
echo"<br>";
var_dump($var1);
echo "<br>";
var_dump($var2);
echo "<br>";
var_dump($var3);
echo "<br>";
var_dump($var4);
echo "<br>";
?>