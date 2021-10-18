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
             * Ejercicio 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. 
             * (Utilizar cuando sea posible la clase DateTime)
            */

                /*Siempre es mejor delimitar el idioma y la zona horaria*/
                setlocale(LC_ALL, "es_ES.utf-8"); //Seleccionamos el idioma castellano con setlocale($category, $locale)
                date_default_timezone_set("Europe/Madrid"); //Ajustamos la zona horaria a España con la funcion date_default_timezone_set($timezone)

                //Mostrar zona horaria en la que estoy:
                echo "Zona horaria en la cual me encuentro:  ";
                echo date_default_timezone_get();
                


                //Muestro la fecha con las clases date() y time()
                echo "<h4>Muestro la fecha y hora actual usando la funcion date() y time()</h4>";
                $fechaActual = date('d-m-Y H:m:s', time());
                echo $fechaActual;
                
                //Creando un objeto DateTime:
                $oFechaHora = new DateTime();
                $fechaHoraActual = $oFechaHora -> format ('d-m-Y H:m:s');
                    /*Donde el formato 'd-m-Y H:m:s' es:
                         *     d - número del día del mes con 2 dígitos
                         *     m - número del mes con 2 dígitos
                         *     Y - año con 4 dígitos
                         *     H - hora en formato 24H con 2 dígitos
                         *     i - minutos con 2 dígitos
                         *     s - segundos con 2 dígitos
                    */
                echo "<h4>Usando la clase DateTime</h4>";
                echo $fechaHoraActual;
               
                
                //Utilizando strftime:
                echo "<h4>Utilizando strftime: </h4>";
                    echo strftime("<p>Fecha: %A, %d de %B de %G</p>"); // strftime: para dar formato a la salida
                            /*Donde: %A - día de la semana
                                     %d - número del dia del mes con 2 dígitos
                                     %B - nombre del mes completo
                                     %G - año con 4 dígitos*/
                    echo strftime("<p>Hora: %H:%M:%S</p>"); // strftime: para dar formato a la salida
                            /*Donde: %H - hora en formato 24H con 2 dígitos
                                     %M - minutos con 2 dígitos
                                     %S - segundos con 2 dígitos*/

            ?>
        </div>
    </body>
</html>