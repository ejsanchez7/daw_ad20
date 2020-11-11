<header class="wrapper mainHeader">
    <h1 class="centered">DAW Project - Library</h1>

    <?php if(!empty($_SESSION) && $_SESSION["loggedIn"]){ ?>
        <p>Bienvenid@ <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></p>
    <?php } ?>

</header>

<nav class="wrapper">

    <ul>
        <li id="first-link"><a href="./index.php">Catálogo</a></li>
        <li><a href="">Destacados</a></li>

        <?php if(!empty($_SESSION) && $_SESSION["loggedIn"]){ ?>
            <li><a href="">Mis Préstamos</a></li>
            <li><a href="./newBook.php">Nuevo Libro</a></li>
        <?php } ?>

        <?php if(empty($_SESSION) || !$_SESSION["loggedIn"]){ ?>
            <li><a href="./login.php">Iniciar Sesión</a></li>
        <?php
        }
        else{
        ?>
            <li><a href="./php/logout.php">Cerrar Sesión</a></li>
        <?php } ?>
    </ul>

</nav>
