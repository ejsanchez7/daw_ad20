<?php

require_once "./php/books_data.php";

$isbn = isset($_GET["isbn"]) ? $_GET["isbn"] : null;
$book = ($isbn) ? $books[$isbn] : null;

?>

<!DOCTYPE html>

<html lang="es" dir="ltr">
    <head>
        <title><?php echo $book["title"]; ?></title>
        <meta charset="utf-8" />

        <link rel="icon" class="js-site-favicon" href="https://i.pinimg.com/originals/a3/80/8e/a3808ee76efc97a4bbb3b58375a6f2ae.png" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="./css/main.css">

    </head>

    <body>

        <?php require_once("./php/partials/header.php"); ?>

        <main class="wrapper">

            <!-- "963468953" => [
                "title" => "El Gato Negro",
                "author" => "Edgar Allan Poe",
                "edition" => "2011",
                "publisher" => "Ediciones Leyenda",
                "copies" => 30,
                "summary" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet purus eu ipsum rhoncus cursus ac at ante. Quisque id faucibus diam, gravida fringilla erat.",
                "categories" => ["Novela","Terror"],
                "image" => "https://m.media-amazon.com/images/I/41l7Zz4WHhL.jpg"
            ] -->

            <?php if($book){ ?>

                <header>
                    <h1 class="centered"><?php echo $book["title"]; ?></h1>
                    <h3 class="centered">ISBN: <?php echo $isbn; ?></h3>
                </header>

                <section>

                    <article>

                        <!-- Imagen del libro -->
                        <img src="<?php echo $book["image"]; ?>" alt="<?php echo $book["title"]; ?>" />

                        <!-- Tablas -->
                        <div class="bookDetail">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Autor</th>
                                        <th>Edición</th>
                                        <th>Editorial</th>
                                        <th>Ejemplares</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $book["author"]; ?></td>
                                        <td><?php echo $book["edition"]; ?></td>
                                        <td><?php echo $book["publisher"]; ?></td>
                                        <td><?php echo $book["copies"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <!-- Título -->
                        <h3 class="centered">Categorías</h3>

                        <!-- Lista desordenada -->
                        <ol id="categories">

                            <?php foreach($book["categories"] as $category){  ?>

                                <li><?php echo $category; ?></li>

                            <?php } ?>

                        </ol>

                        <p><?php echo $book["summary"]; ?></p>

                    </article>

                </section>

                <!-- Libros relacionados -->
                <aside>

                    <div class="asideItem">
                        <!-- Imagen -->
                        <a href="https://www.amazon.com.mx/El-Cor%C3%A1n-An%C3%B3nimo/dp/6070734432/ref=asc_df_6070734432/?tag=gledskshopmx-20&linkCode=df0&hvadid=315904076849&hvpos=&hvnetw=g&hvrand=13690345732249237604&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1010149&hvtargid=pla-580834001709&psc=1" target="_blank">
                            <img src="./img/coran.jpg" alt="Coran" />
                        </a>
                        <p>Corán</p>
                    </div>

                    <div class="asideItem">
                        <!-- Imagen -->
                        <a href="./img/biblia_ninos.jpg">
                            <img src="./img/biblia_ninos.jpg" alt="Biblia para niños" />
                        </a>
                        <p>Biblia para niños</p>
                    </div>

                    <div class="asideItem">
                        <!-- Imagen -->
                        <a href="#">
                            <img src="./img/fundamentos_teologia.jpg" alt="Fundamentos de teología" />
                        </a>
                        <p>Fundamentos de Teología</p>
                    </div>

                </aside>

            <?php
            }
            else{
            ?>
                <h2>El libro solicitado no existe en nuestra base de datos.</h2>
            <?php } ?>

        </main>

        <?php require_once("./php/partials/footer.php"); ?>

    </body>

</html>
