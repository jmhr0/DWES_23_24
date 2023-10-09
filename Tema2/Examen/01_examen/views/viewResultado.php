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

        <legend>Resultado</legend>
        <form>
            <form>
             <!-- Resultado -->            
            <table class="table">
                <tbody>
                    <tr>
                    <th>Resultados:</th>
                    </tr>
                        <td>Decimal</td>
                        <td><?=$valor1?></td><tr></tr>
                        <td><?=$operacion?></td>
                        <td><?=$resultado?></td>
                    </tr>
</tr>
                </tbody>
            </table>

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