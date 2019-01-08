<?php

/*
    Operadores Arismeticos
*/

$numero1 = 50; $numero2 = 80;

 echo 'suma: ' . ($numero1 + $numero2). '<br>';
 echo 'resta: ' . ($numero2 - $numero1). '<br>';
 echo 'multiplicacion: ' . ($numero2 * $numero1). '<br>';
 echo 'Division: ' . ($numero2 * $numero1). '<br>';
 echo 'modulo: '. ($numero2 % $numero1). '<br>';

 
 //Operadores Incremento y Decremento:
 
$year = 2019;

//Operador de incremento

$year++;

echo '<h1> Aumento de la variable </h1>';
echo '<h2>'. $year . '</h2>';

//Operador de decremento

$year--;

echo '<h1> Decremento de la variable </h1>';
echo '<h2>'. $year . '</h2>';

//Operador de preIncremento

++$year;

echo '<h1> Decremento de la variable </h1>';
echo '<h2>'. $year . '</h2>';

//Operador de preIncremento

--$year;

echo '<h1> Decremento de la variable </h1>';
echo '<h2>'. $year . '</h2>';

//Operadores de asignacion *=, +=, -=, /=

$edad = 45;

echo '<h1> edad :</h1>';
echo '<h2>'. $edad . '</h2>';
echo '<h2>'. ($edad/=5) . '</h2>';
?>

