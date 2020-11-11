<?php
//require_once "./php/books_data.php";
require_once "./php/json.php";
require_once "./php/config.php";

session_start();

$books = readJSON(BOOKS_DATA_FILE);
$authors = readJSON(AUTHORS_DATA_FILE);
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/

?>


<!DOCTYPE html>

<html lang="es" dir="ltr">
    <head>
        <title>HTML First Example</title>
        <meta charset="utf-8" />

        <link rel="icon" class="js-site-favicon" href="https://i.pinimg.com/originals/a3/80/8e/a3808ee76efc97a4bbb3b58375a6f2ae.png" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="./css/main.css" />
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./css/catalog.css">

    </head>

    <body>

        <?php require_once("./php/partials/header.php"); ?>

        <main class="wrapper">

            <header>
                <h1 class="centered">Catálogo</h1>
            </header>

            <section id="catalog">

                <?php
                foreach($books as $isbn => $book){

                    $authorId = $book['author'];
                ?>

                    <div class="bookItem">
                        <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" />
                        <h3><?php echo $book['title']; ?></h3>
                        <p><?php echo $authors[$authorId]["name"]; ?></p>
                        <div>
                            <a href="./book.php?isbn=<?php echo $isbn; ?>" target="_blank">Ver detalle</a>
                        </div>
                    </div>

                <?php } ?>


            </section>

        </main>

        <?php require_once("./php/partials/footer.php"); ?>

    </body>

</html>
