<?php

$books = [
    "4668665355" => [
        "title" => "Harry Potter y El Cáliz de Fuego",
        "author" => "J.K. Rowling",
        "edition" => "2004",
        "publisher" => "Salamandra",
        "copies" => 100,
        "summary" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet purus eu ipsum rhoncus cursus ac at ante. Quisque id faucibus diam, gravida fringilla erat.",
        "categories" => ["Novela","Fantasía"],
        "image" => "https://www.sanborns.com.mx/imagenes-sanborns-ii/1200/9788498389265.jpg"
    ],
    "8976564343469" => [
        "title" => "Viaje al Centro de la Tierra",
        "author" => "Julio Verne",
        "edition" => "1994",
        "publisher" => "Porrúa",
        "copies" => 25,
        "summary" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet purus eu ipsum rhoncus cursus ac at ante. Quisque id faucibus diam, gravida fringilla erat.",
        "categories" => ["Novela","Ciencia Ficción"],
        "image" => "https://i.pinimg.com/564x/b0/dc/87/b0dc870758314b34afbffab90a96b35b.jpg"
    ],
    "963468953" => [
        "title" => "El Gato Negro",
        "author" => "Edgar Allan Poe",
        "edition" => "2011",
        "publisher" => "Ediciones Leyenda",
        "copies" => 30,
        "summary" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet purus eu ipsum rhoncus cursus ac at ante. Quisque id faucibus diam, gravida fringilla erat.",
        "categories" => ["Novela","Terror"],
        "image" => "https://m.media-amazon.com/images/I/41l7Zz4WHhL.jpg"
    ]
];

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

                <?php foreach($books as $isbn => $book){ ?>

                    <div class="bookItem">
                        <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" />
                        <h3><?php echo $book['title']; ?></h3>
                        <p><?php echo $book['author']; ?></p>
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
