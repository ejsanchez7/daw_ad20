<?php

define("BOOKS_DATA_FILE",dirname(__FILE__,2) . "/data/books.json");
define("AUTHORS_DATA_FILE",dirname(__FILE__,2) . "/data/authors.json");
define("PUBLISHERS_DATA_FILE",dirname(__FILE__,2) . "/data/publishers.json");
define("USERS_DATA_FILE",dirname(__FILE__,2) . "/data/users.json");

$permissions = [
    "catalog" => false,
    "login" => false,
    "newBook" => true
];
