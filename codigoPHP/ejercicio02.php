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
             * Created on: 01-octubre-2021
             * Ejercicio 2. Inicializar y mostrar una variable heredoc.
             */

            //Variable heredoc se comporta igual que una variable string entre comillas dobles
                $varDoc = <<<EOD
                        SELECT * FROM table1 USE INDEX (key1,key2)
                        WHERE key1=1 AND key2=2 AND key3=3;
                        EOD;
                echo $varDoc;

            ?>
        </div>
    </body>
</html>
