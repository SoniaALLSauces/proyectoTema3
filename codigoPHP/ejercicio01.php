<!DOCTYPE html>

<!-- Author: Sonia Antón Llanes -->
<!-- Created on: 07-octubre-2020 -->
<!-- Ejercicio 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) 
y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).-->

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
        <header>
            <h2><a href="../indexProyectoTema3.html"><img src="../webroot/images/return.png" alt="return"></a>
                DWES - Tema 3. Características del Lenguaje PHP</h2>
            <h3>Ejercicio 1. Inicializa variables de los distintos tipos de datos básicos(string, int, float, bool) 
                y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump)</h3>
        </header>
        <main>
            <div class="php">       
                <?php
                /* Inicializo las variables */
                    $vString="Sonia";
                    $vInt=41;
                    $vFloat=1.56;
                    $vBool=true;

                /* Muestro por pantalla con echo */
                    echo "<h4>Variables motradas por pantalla con \"echo\": </h4>";
                    echo "<p>Una variable string con echo se muestra: " . $vString . "</p>";
                    echo "<p>Una variable int con echo se muestra: " . $vInt . "</p>";
                    echo "<p>Una variable float con echo se muestra: " . $vFloat . "</p>";
                    echo "<p>Una variable booleana con echo se muestra: " . $vBool . "</p>";

                /* Muestro por pantalla con print */
                    print "<br><h4>Variables motradas por pantalla con \"print\": </h4>";
                    print "<p>Una variable string con print se muestra: " . $vString . "</p>";
                    print "<p>Una variable int con print se muestra: " . $vInt . "</p>";
                    print "<p>Una variable float con print se muestra: " . $vFloat . "</p>";
                    print "<p>Una variable booleana con print se muestra: " . $vBool . "</p>";

                /* Muestro por pantalla con printf */
                    printf ("<br><h4>Variables motradas por pantalla con \"printf\": </h4>");
                    printf ("<p>Una variable string con printf se muestra: %s </p>", $vString);
                    printf ("<p>Una variable int con printf se muestra: %d </p>", $vInt);
                    printf ("<p>Una variable float con printf se muestra: %d </p>", $vFloat);
                    printf ("<p>Una variable booleana con printf se muestra: %s </p>" , $vBool);

                /* Muestro por pantalla con print_r */
                    print_r ("<br><h4>Variables motradas por pantalla con \"print_r\": </h4>");
                    print_r ("<p>Una variable string con print_r se muestra: " . $vString . "</p>");
                    print_r ("<p>Una variable int con print_r se muestra: " . $vInt . "</p>");
                    print_r ("<p>Una variable float con print_r se muestra: " . $vFloat . "</p>");
                    print_r ("<p>Una variable booleana con print_r se muestra: " . $vBool . "</p>");

                /* Muestro por pantalla con var_dump */
                    var_dump ("<br><h4>Variables motradas por pantalla con \"var_dump\": </h4>");
                    var_dump ("<p>Una variable string con var_dump se muestra: " . $vString . "</p>");
                    var_dump ("<p>Una variable int con var_dump se muestra: " . $vInt . "</p>");
                    var_dump ("<p>Una variable float con var_dump se muestra: " . $vFloat . "</p>");
                    var_dump ("<p>Una variable booleana con var_dump se muestra: " . $vBool . "</p>");
                    
                /* Otra forma de mostrar por pantalla es con var_export*/
                    var_export ("<br><h4>Variables motradas por pantalla con \"var_export\": </h4>");
                    var_export ("<p>Una variable string con var_export se muestra: " . $vString . "</p>");
                    var_export ("<p>Una variable int con var_export se muestra: " . $vInt . "</p>");
                    var_export ("<p>Una variable float con var_export se muestra: " . $vFloat . "</p>");
                    var_export ("<p>Una variable booleana con var_export se muestra: " . $vBool . "</p>");
                ?>
            </div>
        </main>
    </body>
</html>
