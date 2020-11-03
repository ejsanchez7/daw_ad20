<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Files Manipulation Example</title>
    </head>
    <body>

        <form class="" action="./php/save_product.php" method="post">

            <label for="id">ID: </label>
            <input type="text" name="id" id="id" value="<?php echo uniqid();  ?>" readonly />
            <!-- Nombre,precio,cantidad -->
            <br/><br/>
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name" value="" required />
            <br/><br/>
            <label for="price">Precio: </label>
            <input type="number" name="price" id="price" value="" step="0.1" />
            <br/><br/>
            <label for="qty">Cantidad: </label>
            <input type="number" name="qty" id="qty" value="" />
            <br/><br/>
            <input type="submit" name="save" value="Guardar" />

        </form>

    </body>
</html>
