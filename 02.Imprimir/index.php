<!DOCTYPE HTML>

<html lang="es">

    <head>
        <meta charset=UTF-8" />
        <title>Imprimir en pantalla - Master en PHP</title>
    </head>

    <body>
        <h1>Master en PHP </h1>
       
        <?= "Este es un atajo de echo"?>
        <?php

            echo '<h3>Listado de Videojuegos:</h3>';

            echo "<ul>"
                    . "<li>GTA</li>"
                    . "<li>FIFA</li>"
                    . "<li>CALL OF DUTY</li>"  
                . "</ul>";
                
                //Pára concatenar en php se usa el .
                echo '<p>Esta es toda'.'-'.'lista de juegos </p>';
        ?>
    </body>
</html>
