<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir head -->
    <title>Actividad 3.2 Actividad</title>
    <?php
    include 'layouts/head.html';
    ?>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-person-circle"></i>
            <span class="fs-5">Actividad 3.2 Actividad switch</span>
        </header>

        <?php

    echo "<h1>Mes actual</h1>";
    echo "Estamos en el mes de ";
    
    $mes = date("m");
    switch ($mes){
        case 1:
            echo "<strong>Enero</strong>";
            break;
        case 2:
            echo "<strong>Febrero</strong>";
            break;
        case 3:
            echo "<strong>Marzo</strong>";
            break;
        case 4:
            echo "<strong>Abril</strong>";
            break;
        case 5;
            echo "<strong>Mayo</strong>";
            break;
        case 6;
            echo "<strong>Junio</strong>";
            break;
        case 7:
            echo "<strong>Julio</strong>";
            break;
        case 8: 
            echo "<strong>Agosto</strong>";
            break;
        case 9:
            echo "<strong>Septiembre</strong>";
            break;
        case 10:
            echo "<strong>Octubre</strong>";
            break;
        case 11:
            echo "<strong>Noviembre</strong>";
            break;
        case 12:
            echo "<strong>Diciembre</strong>";
            break;
        default:
            echo "No tenemos un formato adecuado";
            break;
    }
?>
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>