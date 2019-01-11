<?php

/*Estructura de control permite darle una logica a nuestro programa
 * Permite controlar el flujo del program.
*/ 

/*Estructura de control estan las de eleccion(Condicionales)
 * las interactivas (Ciclos o Bucles) 
*/

/*
   Condicionales :
   IF : Estructura 
  
 
    //OPERADORES
    ==  : igual a
    === : identico a
    !=  : distinto o diferente a
    <>  : diferente a
    !== : no identico a
    <   : menor que 
    >   = mayor que
    <=  : menor igual que 
    >=  : mayor igual que
   if (condicion) {
        
    instrucciones
   }else{
    otras instrucciones
   }
 
*/

///////////////////////////////////

echo '<h2> Condicion if IGUAL A </h2>';
$color = "rojo";

if ($color == "rojo") {
    
    echo 'el color es rojo : ' . $color;
} else {
    
    echo 'el color no es rojo es : ' . $color;
}

//////////////////////////////////

echo '<h2> Condicion if IGUAL A </h2>';
$year = 2028;

if ($year != 2019) {
    
    echo 'Es un año anterior a 2019, el año es :' . $year;
} else {
    
    echo 'Estamos en año posterior a 2019, el año es : ' . $year;
}

?>

