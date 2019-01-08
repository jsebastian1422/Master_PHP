<?php

/*
    Las constantes son contenedores de datos, solo que su valor no puede variar, es un valor fijo.
*/

//Las constantes se declaran de la siguiente manera:

define('nombre', 'Sebastian Villada');
define('web', 'miwebprueb.com');

//Para imprimir una constantes anulamos el signo $

echo '<h1>'. nombre . '</h1>';
echo '<h1>'. web . '</h1>';

//Solo podran varar las variables 

$web = 'pagina web rpueba';

echo '<h1>'. $web . '</h1>';

//Constantes pre definidas de PHP, estas constantes inican en PHP_

echo __LINE__;  


?>

