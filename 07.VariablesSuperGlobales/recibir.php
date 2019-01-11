<?php

/*$_GET es un array super global que obtiene la informacion enviada desde el metodo*/

/*echo '<h1> Nombre :' . $_GET['nombre'] . '</h1>';
echo '<h1> Apellidos :' . $_GET['apellidos'] . '</h1>';

//Podemos ver lo que esta almacenando el parametro $_GET
var_dump($_GET);*/

/*$_POST es un array super global que obtiene la informacion enviada desde el firmuario}
 * Las diferencias entre el metodo get y post es que el metodo get viaja por medio de la
 * url, en cambio el metodo pos viaja por medio de la cabecera y no muestra los datos
 * al usuario por lo tanto es mas seguro.
*/

echo '<h1> Carro :' . $_POST['carro'] . '</h1>';
echo '<h1> Color Carro :' . $_POST['colorCarro'] . '</h1>';

//Podemos ver lo que esta almacenando el parametro $_GET
var_dump($_POST);
?>

