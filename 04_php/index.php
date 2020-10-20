<?php

//phpinfo();

#Esto es un comentario de una sola línea

/*
Esto es un
comentario
multilínea
*/

//Definición de variables (el tipo de datos se asigna dinámicamente)
$number = "hola";

//Definición de constantes
define("PI",3.1416);

//Comillas dobles interpreta las variables como el valor asignado a ellas
echo "La variable es igual a: $number<br/>";
//Unset elimina una variable
unset($number);
//Comillas simples interpreta las variables como texto literal
echo '¿existe $number? ';
var_dump(isset($number));
//Empty verifica si una variable está vacía
echo '<br/>¿está vacío $number?';
var_dump(empty($number));

echo "<br/>El valor de PI es: " . PI . "<br/>";

//Arreglo en PHP
$array = [1,2,"3",4,5];

echo "<br>";+
print_r($array);
echo "<br>";
var_dump($_GET);

if($_GET["parameter"] != 12345){
    echo "true";
}
else{
    echo "false";
}

$students = [
    "A012345" => [
        "name" => "Alejandro Vázquez",
        "age" => 18,
        "major" => "LAE"
    ],
    "A0659324" => [
        "name" => "Mariana Ramírez",
        "age" => 21,
        "major" => "ISD"
    ],
    "A659345" => [
        "name" => "Diana López",
        "age" => 25,
        "major" => "IMT"
    ]
];

//Genera un <tr> con los datos del estudiante
function generateStudent($id){

    /*
    Si quiero usar una variable que se encuentre en el contexto
    global se debe declarar con la palabra reservada "global"
    */
    global $students;
    $student = $students[$id];

    return ("<tr>" .
                "<td>" . $id . "</td>" .
                "<td>" . $student["name"] . "</td>" .
                "<td>" . $student["age"] . "</td>" .
                "<td>" . $student["major"] . "</td>" .
            "</tr>");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo "Ejemplo PHP"; ?></title>
    </head>
    <body>

        <?php echo "<h1>Esto es un ejemplo de PHP</h1>"; ?>

        <p>
            Esto fue pasado por GET: <?php echo $_GET["parameter"]; ?>
        </p>

        <table border="1">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = $_GET["parameter"];

                //Si se pasó el parámetro imprimo al alumno con esa matrícula
                if(isset($id)){
                    echo generateStudent($id);
                }
                //Imprimo todos los alumnos
                else{
                    foreach($students as $id => $student){
                        echo generateStudent($id);
                    }
                }
                ?>
            </tbody>
        </table>

    </body>
</html>
