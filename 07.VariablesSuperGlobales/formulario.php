<!DOCTYPE HTML>

<html lang="es">
    
    <head>
        <meta charset="utf-8">
        <title>
            Formulario en PHP
        </title>
    </head>
    
    <body>
        
        <h1> Formulario en PHP </h1>
        
        <!-- Este es un formulario que utiliza como metodo GET
        <form method="GET" action="recibir.php">
            
            <div>
                <label for="nombre">NOMBRE</label>
                <input type="text" name="nombre"/>
            </div>
            
            <div>
                <label for="apellidos">APELLIDOS</label>
                <input type="text" name="apellidos"/>
            </div>
            
            <div>
                <input type="submit" value="enviar datos">
            </div>
          
        </form>
        
        -->
        
        <!-- Este es un formulario que utiliza como metodo POST-->
        <form method="POST" action="recibir.php">
            
            <div>
                <label for="carro">CARRO</label>
                <input type="text" name="carro"/>
            </div>
            
            <div>
                <label for="colorCarro">COLOR CARRO</label>
                <input type="text" name="colorCarro"/>
            </div>
            
            <div>
                <input type="submit" value="enviar datos">
            </div>
          
        </form>
    </body>
</html>

