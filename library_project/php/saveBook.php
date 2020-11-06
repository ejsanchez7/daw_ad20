<?php

require_once "./config.php";
require_once "./json.php";

//Cargar en un arreglo los datos d elos libros desde el JSON
$books = readJSON(BOOKS_DATA_FILE);

$isbn = $_POST["isbn"];

//Crear un arreglo con la representación del libro
$data = [
    "isbn" => $isbn,
    "title" => $_POST["title"],
    "author" => $_POST["author"],
    "edition" => $_POST["edition"],
    "publisher" => $_POST["publisher"],
    "copies" => $_POST["copies"],
    "summary" => $_POST["sinopsis"],
    "categories" => ["novela"],
    "image" => $_POST["book_cover"]
];

//Insertar el nuevo libro en el arreglo
$books[$isbn] = $data;

//Guardar la estructura en el archivo JSON
if(writeJSON(BOOKS_DATA_FILE,$books)){
    //Redirigir al catálogo
    header("Location: ../index.php");
    //echo "success";
}
else{
    header("Location: ../newBook.php?error=1");
    //echo "success";
}


/*
"963468953": {
    "isbn": "963468953",
    "title": "El Gato Negro",
    "author": "Edgar Allan Poe",
    "edition": "2011",
    "publisher": "Ediciones Leyenda",
    "copies": 30,
    "summary": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet purus eu ipsum rhoncus cursus ac at ante. Quisque id faucibus diam, gravida fringilla erat.",
    "categories": ["Novela","Terror"],
    "image": "https://m.media-amazon.com/images/I/41l7Zz4WHhL.jpg"
}

echo "<pre>";
echo $jsonData;
echo "</pre>";
*/


//echo "Book Saved";

//var_dump($_POST);
