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
            table{border-collapse: collapse;}
            .td{border: 1px solid graytext;}
        </style>
    </head>
    <body>

            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 20-octubre-2021
             * Ejercicio 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
            */

            /* Variables mostradas con print_r */
                
        //$GLOBAL
            echo "<table>";
                echo "<tr>";
                    echo "<th><h4>Variable \$GLOBALS </h4></th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>mostramos con print_r (con preformato)</th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><pre>";
                    print_r($GLOBALS);
                    echo "</pre></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>recorremos con el foreach</th>";
                echo "</tr>";
            echo "</table>";
            echo "<table>";
                    foreach ($GLOBALS as $elemento => $valor) {
                        echo "<tr>";
                        print_r("<td class=\"td\">$elemento</td> <td class=\"td\">$valor</td>");
                        echo "</tr>";
                    }
            echo "</table>";
            
        //$_SERVER
            echo "<table>";
                echo "<tr>";
                    echo "<th><h4>Variable \$_SERVER </h4></th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>mostramos con print_r (con preformato)</th>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><pre>";
                    print_r($_SERVER);
                    echo "</pre></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>recorremos con el foreach</th>";
                echo "</tr>";
            echo "</table>";
            echo "<table>";
                    foreach ($_SERVER as $elemento => $valor) {
                        echo "<tr>";
                        print_r("<td class=\"td\">$elemento</td> <td class=\"td\">$valor</td>");
                        echo "</tr>";
                    }
            echo "</table>";  

            echo "<table style=\"width: 100%\">";
            
        //$_GET
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_GET </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_GET);
                echo "</td> </tr>";

        //$_POST
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_POST </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_POST);
                echo "</td> </tr>";
                
        //$_FILES
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_FILES </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_FILES);
                echo "</td> </tr>";

        //$_COOKIE
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_COOKIE </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_COOKIE);
                echo "</td> </tr>";

        //$_SESSION
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_SESSION </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_SESSION);
                echo "</td> </tr>";
                echo "<tr><td><br></td></tr>";

        //$_REQUEST
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_REQUEST </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_REQUEST);
                echo "</td> </tr>";

        //$_ENV
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_ENV </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    print_r($_ENV);
                echo "</td> </tr>";

            echo "<table>";
            
            ?>
        </div>
    </body>
</html>

