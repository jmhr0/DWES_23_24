<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Incluir head -->
    <?php include 'views/layouts/head.html' ?>
    <title>Conversor decimal</title>
</head>
<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-calculator"></i>
            <span class="fs-6"></span>
            Calculadora Conversor decimal  
        </header>

        <legend>Formulario  Conversor</legend>
        <form>
            <form>
            <!-- Valor Decimal -->
            <div class="mb-3">
                <label class="form-label" >Valor 1</label>
                <input type="number" name="valor1" class="form-control" value="<?=$valor1?>" readonly>
            </div>
             <!-- Mostrar el resultado -->
             <div class="mb-3">
                <label class="form-label"><?=$operacion1?></label>
                <input type="number" class="form-control" value="<?=$resultado1?>" readonly>
                <label class="form-label"><?=$operacion2?></label>
                <input type="number" class="form-control" value="<?=$resultado2?>" readonly>
                <label class="form-label"><?=$operacion3?></label>
                <input type="number" class="form-control" value="<?=$resultado3?>" readonly>

            <!-- Botones de acción -->

                <div class="btn-group" role="group">
                <a class="btn btn-primary" href="http://localhost/dwes/Tema2/Examen/01_examen/" role="button">Volver</a>
            </div>

        
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>
        
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>
</html>