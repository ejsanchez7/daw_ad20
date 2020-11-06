<?php
//Incluir los paths
require_once "./php/config.php";
//Incluir la librería para cargar los JSON
require_once "./php/json.php";

$authors = readJSON(AUTHORS_DATA_FILE);
$publishers = readJSON(PUBLISHERS_DATA_FILE);

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

            <!--
                - Título
                - ISBN
                - Autor
                - Edición
                - Editorial
                - Estatus (disponible/no disponible)
                - Copias disponibles
                - Descripción/Resumen
                - Categoría

                La Bibila
            -->

            <header>
                <h1 class="centered">Registrar Libro</h1>
            </header>

            <section id="form-container">

                <form class="" action="./php/saveBook.php" method="post">

                    <div class="field-row">
                        <label for="title">Título: </label>
                        <input type="text" name="title" id="title" value="" required />
                    </div>
                    <div class="field-row">
                        <label for="isbn">ISBN: </label>
                        <input type="text" name="isbn" id="isbn" value="" required pattern="\d{13}" />
                    </div>
                    <div class="field-row">
                        <label for="author">Autor: </label>
                        <select class="" name="author" id="author">
                            <?php foreach($authors as $id => $author){ ?>
                                <option value="<?php echo $id; ?>"><?php echo $author["name"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="field-row">
                        <label for="edition">Edición: </label>
                        <input type="number" name="edition" id="edition" value="" required />
                    </div>
                    <div class="field-row">
                        <label for="publisher">Editorial: </label>
                        <select class="" name="publisher" id="publisher">
                            <?php foreach($publishers as $id => $publisher){ ?>
                                <option value="<?php echo $id; ?>"><?php echo $publisher["name"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="field-row">
                        <label for="edition">URL de Portada: </label>
                        <input type="url" name="book_cover" id="book_cover" value="" required />
                    </div>
                    <div class="field-row">
                        <label for="copies">Ejemplares: </label>
                        <input type="number" name="copies" id="copies" value="" required />
                    </div>
                    <div class="field-row categories">
                        <h3>Categorías</h3>
                        <div>
                            <input type="checkbox" name="category" id="thriller" value="" /><label for="thriller">Suspenso</label>
                            <input type="checkbox" name="category" id="fiction" value="" /><label for="fiction">Ciencia Ficción</label>
                            <input type="checkbox" name="category" id="terror" value="" /><label for="terror">Terror</label>
                        </div>
                        <div>
                            <input type="checkbox" name="category" id="mistery" value="" /><label for="mistery">Misterio</label>
                            <input type="checkbox" name="category" id="romance" value="" /><label for="romance">Romance</label>
                        </div>
                    </div>

                    <div class="field-row">
                        <label class="block" for="sinopsis">Sinopsis: </label>
                        <textarea name="sinopsis" id="sinopsis" rows="8" cols="50"></textarea>
                    </div>

                    <div class="field-row actions">
                        <input type="submit" name="submit" id="submit" value="Guardar" />
                        <!-- <button type="submit" name="submit">Guardar</button> -->
                    </div>

                </form>

            </section>

        </main>

        <?php require_once("./php/partials/footer.php"); ?>

    </body>

</html>
