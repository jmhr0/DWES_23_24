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
            <span class="fs-4">Actividad 3.3 Apartado 2</span>
        </header>

        <div class="mb-3">
            <table class="table table-primary">
                <?php
                  for ($i=1; $i <= 10; $i++) { //bucle for para las filas
                    echo "<tr>";
                    for ($j = 1; $j <= 10; $j++) { //bucle para las columnas
                        $res = $i*$j; //multiplicacion entre ambas variables para cada apartado
                        echo "<td>$res</td>";
                    }
                    echo "</tr>";
                  }  
                ?>
            </table>
        </div>
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>
    </div>
    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>