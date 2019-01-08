<?php
    
/*
 TIPOS DE DATOS:
 Entero = (int - integer) =  99
 Flotantes = (float - double) = 4.5
 String = (String) = 'hola' - "hola"
 Boleano = (true - false) treue - false
 Null = null
 Array / Vectores = (Coleccion de datos)
 Objetos = Conjuntos de datos independientes
*/

$numero = 514;
$flotante = 4.51;
$String =  'Hola mundo';
$bolean = true;
$null = null;
$array = array();

//Nos muestra que tipo de dato que es la variable es :


echo 'Entero : '. ' Valor : ' .$numero. ' Tipo de dato : ' .gettype($numero) . "<br>";
echo 'Flotante : '. ' Valor : ' .$flotante. ' Tipo de dato : ' .gettype($flotante) . "<br>";
echo 'String : '. ' Valor : ' .$String. ' Tipo de dato : ' .gettype($String) . "<br>";
echo 'Boleano : '. ' Valor : ' .$bolean. ' Tipo de dato : ' .gettype($bolean) . "<br>";
echo 'Nulo : '. ' Valor : ' .$null. ' Tipo de dato : ' .gettype($null) . "<br>";
//echo 'Flotante : '. ' Valor : ' .$array. ' Tipo de dato : ' .gettype($array) . "<br>";


//Debuguear 

$pruebaDebug = "Aquí estamos probando el debug";

var_dump($pruebaDebug);
?>

