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

        <legend>Act 3.1 Formulario Registro</legend>
        <form method="POST" action="acceso.php">

            <form>
                <!-- usuario -->
                <div class="mb-3">
                    <label class="form-label">Usuario</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="usuario">
                    <div id="emailHelp" class="form-text">Entre 8 y 15 caracteres.</div>
                </div>
                <!-- email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Entre 8 y 15 caracteres.</div>
                </div>
                <!-- password -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirma Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <!-- passwrod confirm -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="passwordConfirm">
                </div>

                <!-- perfiles -->

                <select class="form-select" aria-label="Default select example" name = "perfil">
                    <option value="1">Administrador</option>
                    <option value="2">Editor</option>
                    <option value="3">Usuario</option>
                    <option selected disabled>Seleccione su perfil</option>
                </select>
            </form>
            <br>
            <br>
            <br>
            <br>
                <!-- botones de accion -->
-
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <button type="submit" class="btn btn-primary" formaction="conversor.php">Todo</button>
            <button type="reset" class="btn btn-primary" formaction="conversor.php">Todo</button>



        </form>


        <!-- Pié del documento -->
        <?php include 'views/layouts/footer.html' ?>

    </div>

    <!-- javascript bootstrap 532 -->
    <?php include 'views/layouts/javascript.html' ?>
</body>

</html>