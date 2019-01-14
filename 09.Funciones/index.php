<?php


/*FUNCIONES :
    Conjunto de ordenes agrupadas por un nombre en concreto, dentro de una funcion se pueden tener varias instrucciones.
*/

//Crea la funcion.

/*function muestraNombres(){
    
    echo 'Nombre : Andrea <br>';
    echo 'Nombre : Pedro <br>';
    echo 'Nombre : Diana <br>';
    echo 'Nombre : Rene <br>';
    echo '<hr/>';
}*/

//Se llama la funcion.
/*muestraNombres();*/

//Crea funcion con parametros.

/*function tablaMultiplicar($numero){
    
    echo '<h1><center>Tabla de multiplicar</center></h1>';
    echo '<h4><center>'. $numero .'</center></h4>';
    for ($i = 1; $i <= 10; $i++) {
        
        $operacion = $numero * $i;
        echo '<center>' . $numero . ' X ' . $i . ' = ' . $operacion .'</center>';
        echo '<hr>';
    }
}

if (isset($_GET['numero'])){
    
    tablaMultiplicar($_GET['numero']);
} else {
    
    echo 'No se encontro numero.';
}*/


//Calculadora

function calculadora($numero1, $numero2){
    
    //Conjunto de instrucciones a ejecutar.
    
    $suma   = $numero1 + $numero2;
    $resta  = $numero1 - $numero2;
    $multi  = $numero1 * $numero2;
    if ($numero1 < $numero2){
        
        $divi   = $numero2 / $numero1;
    }else{
        
        $divi   = $numero1 / $numero2;
    }
    
    echo '<h1><center>Calculadora</center></h1>';
    echo '<h4><center>'. $numero1 . ' & ' . $numero2 . '</center></h4>';
    
    echo '<center> Suma : ' . $numero1 . ' + ' . $numero2 . ' = ' . $suma . '</center>';
    echo '<center> Resta : ' . $numero1 . ' - ' . $numero2 . ' = ' . $resta . '</center>';
    echo '<center> Multiplicacion : ' . $numero1 . ' X ' . $numero2 . ' = ' . $multi . '</center>';
    
    if ($numero1 < $numero2){
        
        echo '<center> Multiplicacion : ' . $numero2 . ' / ' . $numero1 . ' = ' . $divi . '</center>';
    }else{
        
        echo '<center> Multiplicacion : ' . $numero1 . ' / ' . $numero2 . ' = ' . $divi . '</center>';
    }

}

if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    
    calculadora($_GET['numero1'], $_GET['numero2']);
}else{
    
    echo 'No se encontraron operadores, para realizar porcesos con la calculadora';
}


?>

