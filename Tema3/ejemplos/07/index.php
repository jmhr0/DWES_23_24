<!-- ejemplo de elaboracion vistas html con if alternativos -->

<?php $perfil = "administrador" ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla HTML - BOOTSTRAP</title>
    <!-- css bootstrap 532-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Iconos bootstrap 532 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- Capa principal -->
    <div class="container">
        <!-- Cabecera -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-bootstrap-fills"></i>
            <span class="fs-4">Plantilla Bootstrap</span>
        </header>

        <!-- codigo -->
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Articulos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Clientes</a>
                </li>
                <?php if ($perfil == "administrador"): ?>

                <li class="nav-item">
                    <a class="nav-link" href="#">Admin</a>
                </li>

                <?php endif; ?>
            </ul>
        </nav>

        <!-- Pie de documento -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">@ 2023
                    Juan Manuel Herrera Ramirez - DWES - 2º DAW - Curso 23/24
                </span>
            </div>
        </footer>
    </div>


    <!-- js bootstrap 532-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>