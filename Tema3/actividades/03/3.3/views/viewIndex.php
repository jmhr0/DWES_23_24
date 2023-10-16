<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir head -->
    <title>Actividad 3.3 apartado 2 </title>
    <?php
    include 'layouts/head.html';
    ?>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-4">Actividad 3.3 Apartado 3</span>
        </header>

        <form method="POST">
            <div class="mb-3">
                <?php

                // Array con los días de la semana en castellano
                $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

                // El bucle iterara por todos los elementos del array previamente declarado en orden en fnción del dia de la semana que sea, guiado por la funcion date
                for ($i = 0; $i < date('N'); $i++):
                    $diaSemana = $dias[$i];?>
                    <label><?= $diaSemana ?></label>
                    <br>
                <?php endfor; ?>
            </div>
        </form>
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>
    </div>
    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>