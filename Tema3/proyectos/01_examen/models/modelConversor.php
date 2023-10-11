<?php 


$valor1 = $_POST['valor1'];

$operacion1="Binario";
$operacion2="Octal";
$operacion3="Hexadecimal";

$resultado1=decbin($valor1);
$resultado2=decoct($valor1);
$resultado3=dechex($valor1);


?>