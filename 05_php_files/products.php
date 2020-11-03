<?php
define("PRODUCTS_FILE", dirname(__FILE__) . "/data/products.dat");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
    </head>

    <body>

        <h1>Lista de Productos</h1>

        <?php if($data = file(PRODUCTS_FILE)){ ?>

            <table border="1">
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </thead>

                <tbody>
                    <?php
                    foreach($data as $line){

                        $product = explode("#",$line);
                    ?>
                        <tr>
                            <td><?php echo $product[0]; ?></td>
                            <td><?php echo $product[1]; ?></td>
                            <td><?php echo $product[2]; ?></td>
                            <td><?php echo $product[3]; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php
        }
        else{
        ?>
            <h3>No hay productos registrados</h3>

        <?php } ?>

    </body>

</html>
