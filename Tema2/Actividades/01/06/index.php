<?php
$Nombre = "Juan Manuel";
$Apellidos = "Herrera Ramirez";
$Población = "Villamartin";
$Edad = "21";
$Ciclo = "DAW";
$Curso = "2";
$Módulo = "Desarrollo entorno servidor";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Información del Usuario</h1>
    <table>
        <tr>
            <td>Nombre</td>
            <td><?php echo $Nombre; ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo $Apellidos; ?></td>
        </tr>
        <tr>
            <td>Población</td>
            <td><?php echo $Población; ?></td>
        </tr>
        <tr>
            <td>Edad</td>
            <td><?php echo $Edad; ?></td>
        </tr>
        <tr>
            <td>Ciclo</td>
            <td><?php echo $Ciclo; ?></td>
        </tr>
        <tr>
            <td>Curso</td>
            <td><?php echo $Curso; ?></td>
        </tr>
        <tr>
            <td>Módulo</td>
            <td><?php echo $Módulo; ?></td>
        </tr>
    </table>
</body>
</html>
