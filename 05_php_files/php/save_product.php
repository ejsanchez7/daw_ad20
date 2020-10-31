<?php

$data = [
    $_POST["id"],
    $_POST["name"],
    $_POST["price"],
    $_POST["qty"]
];

$dataStr = implode("#",$data) . "\n";

if($file = fopen("../data/products.dat","a")){

    if(fwrite($file,$dataStr)){
        fclose($file);
        header("Location: ../products.php");
    }
    else{
        fclose($file);
        echo "Error al escribir los datos";
    }

}
else{
    echo "Error al abrir el archivo de datos";
}
