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
        <style>
            span{color: red;}
        </style>
    </head>
    <body>

            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 01-octubre-2021
             * Ejercicio 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) 
             * y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump)
             */

                //Inicializo las variables con $
                $vString = "Sonia";
                $vInt = 42;
                $vFloat = 1.55;
                $vBool = true;

                //Muestro por pantalla con echo"..."; :
                //las comillas simples '' muestra el literal y las comillas dobles "" reconoce variables, el punto . concatena
                echo "<br><h4>Variables mostradas por pantalla con \"echo\" : </h4>";
                echo '<p>La variable $vString tiene el valor: <strong>'.$vString."</strong> y es de tipo ".gettype($vString)."</p>";
                echo '<p>La variable $vInt tiene el valor: <strong>'.$vInt."</strong> y es de tipo ".gettype($vInt)."</p>";
                echo '<p>La variable $vFloat tiene el valor: <strong>'.$vFloat."</strong> y es de tipo ".gettype($vFloat)."</p>";
                echo '<p>La variable $vBool tiene el valor: <strong>'.$vBool."</strong> y es de tipo ".gettype($vBool)."</p>";

                //Muestro por pantalla con print"..."; :
                print "<br><h4>Variables mostradas por pantalla con \"print\" : </h4>";
                print '<p>La variable $vString tiene el valor: <strong><span>'.$vString."<span></strong> y es de tipo ".gettype($vString)."</p>";
                print '<p>La variable $vInt tiene el valor: <strong><span>'.$vInt."<span></strong> y es de tipo ".gettype($vInt)."</p>";
                print '<p>La variable $vFloat tiene el valor: <strong><span>'.$vFloat."<span></strong> y es de tipo ".gettype($vFloat)."</p>";
                print '<p>La variable $vBool tiene el valor: <strong><span>'.$vBool."<span></strong> y es de tipo ".gettype($vBool)."</p>";

                //Muestro por pantalla con printf("... %s %d %1.1f ",variables); :
                printf ("<br><h4>Variables mostradas por pantalla con \"printf\" : </h4>");
                printf ("<p>Variable String: %s </p>",$vString);
                printf ("<p>Variable Int: %d </p>",$vInt);
                printf ("<p>Variable Float: %2.2f </p>",$vFloat);
                printf ("<p>Variable Booleana: %d </p>",$vBool);

                //Muestro por pantalla con print_r("..."); :
                print_r ("<br><h4>Variables mostradas por pantalla con \"print_r\" : </h4>");
                print_r ("<p>Variable String: ".$vString."</p>");
                print_r ("<p>Variable Int: ".$vInt."</p>");
                print_r ("<p>Variable Float: ".$vFloat."</p>");
                print_r ("<p>Variable Booleana: ".$vBool."</p>");

                //Muestro por pantalla con var_dump("..."); :
                var_dump ("<br><h4>Variables mostradas por pantalla con \"var_dump\" : </h4>");
                var_dump ("<p>Variable String: ".$vString."</p>");
                var_dump ("<p>Variable Int: ".$vInt."</p>");
                var_dump ("<p>Variable Float: ".$vFloat."</p>");
                var_dump ("<p>Variable Booleana: ".$vBool."</p>");

                //Muestro por pantalla con var_export("..."); :
                var_export("<br><h4>Variables mostradas por pantalla con \"var_export\" : </h4>");
                var_export ("<p>Variable String: ".$vString."</p>");
                var_export ("<p>Variable Int: ".$vInt."</p>");
                var_export ("<p>Variable Float: ".$vFloat."</p>");
                var_export ("<p>Variable Booleana: ".$vBool."</p>");
            ?>
        </div>
    </body>
</html>