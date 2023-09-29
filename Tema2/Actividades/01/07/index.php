<?php
$Nombre = "Juan Manuel";
$Apellidos = "Herrera Ramirez";
$Población = "Villamartin";
$Edad = "21";
$Ciclo = "DAW";
$Curso = "2";
$Módulo = "Desarrollo Entorno servidor";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 7</title>
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
    <h2>Historia del Usuario</h2>
    <p>Había una vez en la ciudad de <?php echo $Población; ?>, un estudiante llamado <?php echo $Nombre; ?> <?php echo $Apellidos; ?> que estaba estudiando en el programa <?php echo $Ciclo; ?>. Actualmente, estaba inscrito en el curso <?php echo $Curso; ?>, específicamente en el módulo <?php echo $Módulo; ?>. A pesar de tener solo <?php echo $Edad; ?> años, se dedicaba a sus estudios y se esforzaba por alcanzar la excelencia en su campo elegido.</p>
</body>
</html>
