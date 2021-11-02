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
             * Created on: 05-octubre-2021
             * Ejercicio 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
            */

                //Creamos un objeto DateTime inicializada a un valor:
                // new DateTime ('Y-m-d H:m:s');
                $fechaDada = new DateTime('1979-04-19');
                echo "<p>Muestro la fecha 19-04-1979 con timestamp</p>";
                // Timestamp es una medida en segundos que han transcurrido desde las 0 horas del 1 de enero de 1970 GMT 
                echo $fechaDada ->getTimestamp();
                
                //Muestro el instante actual:
                $fechaActual = new DateTime();
                echo "<p>Muestro la fecha actual con timestamp</p>";
                echo $fechaActual ->getTimestamp();

            ?>
        </div>
    </body>
</html>