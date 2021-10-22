<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 00</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    </head>
    <body>

            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 20-octubre-2021
             * Ejercicio 8. Mostrar la dirección IP del equipo desde el que estás accediendo.
            */

            //$_SERVER contiene información del servidor, si pasamos 'REMOTE_ADDR' nos devuelve la IP
            $direccionIP = $_SERVER['REMOTE_ADDR'];
            echo "<h4>La dirección IP de este equipo es: </h4><br>";
            echo "<p><strong>$direccionIP</strong></p>";
            
            ?>
        </div>
    </body>
</html>
