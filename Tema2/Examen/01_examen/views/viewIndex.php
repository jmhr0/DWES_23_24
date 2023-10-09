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
        <form method="POST">

            <!-- Valor Decimal -->
            <div class="form-group">
                <label for="valor1"></label>
                <input type="number" name="valor1" class="form-control" placeholder="Valor" aria-describedby="helpId">
                <small id="helpId" class="text-muted"></small>
            </div>

            <br>
            
            <!-- Botones de acción -->
            <button type="reset" class="btn btn-secondary">Resetear</button>

            <div class="btn-group" role="group" >
                <button type="submit" class="btn btn-warning" formaction="binario.php">Binario</button>
                <button type="submit" class="btn btn-success" formaction="octal.php">Octal</button>
                <button type="submit" class="btn btn-danger" formaction="hexadecimal.php">Hexadecimal</button>
            </div>

            <button type="submit" class="btn btn-primary" formaction="conversor.php">Todo</button>

            
            
        </form>

        
        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>
        
    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>
</html>