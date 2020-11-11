<?php
session_start();

if($_SESSION["loggedIn"]){
    header("Location: ./index.php");
}

?>

<!DOCTYPE html>

<html lang="es" dir="ltr">
    <head>
        <title>HTML First Example</title>
        <meta charset="utf-8" />

        <link rel="icon" class="js-site-favicon" href="https://i.pinimg.com/originals/a3/80/8e/a3808ee76efc97a4bbb3b58375a6f2ae.png" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/bookForm.css">

    </head>

    <body>

        <?php require_once("./php/partials/header.php"); ?>

        <main class="wrapper">

            <header>
                <h1 class="centered">Iniciar Sesión</h1>
            </header>

            <section id="form-container">

                <?php if(isset($_GET["error"])){ ?>
                    <h3 style="color:#AA0000">El usuario o password son incorrectos.</h3>
                <?php } ?>

                <form class="" action="./php/processLogin.php" method="post">

                    <div class="field-row">
                        <label for="username">Usuario: </label>
                        <input type="text" name="username" id="username" value="" required />
                    </div>
                    <div class="field-row">
                        <label for="password">Contraseña: </label>
                        <input type="password" name="password" id="password" value="" required />
                    </div>

                    <div class="field-row actions">
                        <input type="submit" name="submit" id="submit" value="Enviar" />
                        <!-- <button type="submit" name="submit">Guardar</button> -->
                    </div>

                </form>

            </section>

        </main>

        <?php require_once("./php/partials/footer.php"); ?>

    </body>

</html>
