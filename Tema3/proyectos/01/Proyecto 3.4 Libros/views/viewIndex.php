<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Incluir head -->
    <title>Actividad 3.2 Actividad</title>
    <?php
    include 'layouts/head.html';
    include 'C:\xampp\htdocs\dwes\Tema3\proyectos\02\libs\crud_funciones.php'
    ?>
</head>


<!-- Capa principal -->
<div class="container">

    <!-- cabecera documento -->
    <header class="pb-3 mb-4 border-bottom">
        <i class="bi bi-person-circle"></i>
        <span class="fs-5">Proyecto 3.4 Libros</span>
    </header>

    <legend>Tabla libros <legend>
            <table class="table">
                <!-- encabezado tabla -->
                <thead>
                    <tr>
                        <?php foreach (array_keys($libros[0]) as $clave): ?>
                            <th>
                                <?php echo $clave; ?>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($libros as $libro): ?>
                        <tr>
                            <?php foreach ($libro as $campo): ?>
                                <td>
                                    <?=$campo; ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <tr>
                        <td>
                Total de libros: <?=count($libros); ?>
                        </td>
                    </tr>
                </tfoot>
                <!-- Pié del documento -->
                <?php include 'views/layouts/footer.html' ?>

</div>

<!-- javascript bootstrap 532 -->
<?php include 'views/layouts/javascript.html' ?>


</html>