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
             * Ejercicio 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
            */

                date_default_timezone_set('Europe/Lisbon');  //Ajusto a la zona horaria de Oporto
                setlocale(LC_ALL, "pt_BR", 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese'); //tambien puedo seleccionar el idioma

                //Creando un objeto DateTime:
                $oFechaHora = new DateTime();
                $fechaHoraOporto = $oFechaHora -> format ('d-m-Y H:m:s');
                    /*Donde el formato 'd-m-Y H:m:s' es:
                        *     d - número del día del mes con 2 dígitos
                        *     m - número del mes con 2 dígitos
                        *     Y - año con 4 dígitos
                        *     H - hora en formato 24H con 2 dígitos
                        *     i - minutos con 2 dígitos
                        *     s - segundos con 2 dígitos
                    */
                echo "<p>Muestro la fecha y hora actual en Oporto</p>";
                echo $fechaHoraOporto;

            ?>
        </div>
    </body>
</html>