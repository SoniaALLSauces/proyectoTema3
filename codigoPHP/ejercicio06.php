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
             * Ejercicio 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
            */

                setlocale(LC_ALL, "es_ES.utf-8"); //Seleccionamos el idioma
                date_default_timezone_set("Europe/Madrid"); //Ajustamos la zona horaria a España
                
                $oFechaActual = new DateTime();
                $fechaFormato = $oFechaActual -> format ('d-m-Y');
                echo "<h4>La fecha actual es:  $fechaFormato</h4>";
                
                //Si queremos sumar creando objeto fecha con Datetime
                $oFechaActual->modify('+60days');  //con modify() sumamos o restamos dias,semanas,meses...
                $oFecha = $oFechaActual -> format ('d-m-Y');  //formateo la salida
                //Muestro por pantalla:
                echo "<br><h4>Puedo operar con fechas a partir de un objeto DateTime con la funcion modify()</h4>";
                echo "<br><p>La fecha dentro de 60 días será: <strong>$oFecha</strong></p><br>";
                
                //Si obtengo la fecha con la clase date();
                $fechaActual = date("d-m-Y");
                //con strtotime() - operamos con fechas:
                $fechaMas60 = date ("d-m-Y", strtotime($fechaActual."+ 60 days"));
                //Muestro por pantalla:
                echo "<h4>Y puedo operar a partir de una fecha obtenida con la funcion date() y modificada con strtotime()</h4>";
                echo "<br><p>La fecha dentro de 60 días será: <strong>$fechaMas60</strong></p>";
   
            ?>
        </div>
    </body>
</html>
