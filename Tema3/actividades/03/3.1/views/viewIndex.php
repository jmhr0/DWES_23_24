<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Incluir head -->
    <title>Actividad 3.3 Apartado 1</title>
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
            <span class="fs-5">Actividad 3.3 Apartado 1</span>
        </header>
        <div class="mb-3">
            <table class="table table-primary">
                    <?php
                    $i = 0;

                    //filas
                    echo "<tr>";
                    while ($i < 100) {
                        $i++;
                        if ($i % 10 == 0) { // Cada 10 instancias de la variable $i se creara una nueva fila.
                            echo "<td>$i</td>";
                            echo "</tr>";
                        } else {
                            echo "<td>$i</td>";
                        }
                    } ?>
            </table>
        </div>
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>
    </div>
    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>