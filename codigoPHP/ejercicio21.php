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
             * Created on: 21-octubre-2021
             * Ejercicio 21. Construir un formulario para recoger un cuestionario realizado a una persona y 
             * enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
             */
            
        //Generamos el formulario en html y enviamos a traves de la etiqueta action=""
        //al archivo donde hemos generado el codigo php
            ?>
                <form name="formulario" action="ejercicio21Tratamiento.php" method="post">
                    <table>
                        <tr>
                            <td><label for="LbNombre">Introduce tu nombre</label></td>
                            <td><input type="text" name="nombre" id="LbNombre"></td>
                        </tr>
                        <tr>
                            <td><label for="LbCurso">Introduce el curso que estudias</label></td>
                            <td><input type="text" name="curso" id="LbCurso"></td>
                        </tr>
                    </table>
                    <input name="submit" type="submit" value="Enviar">
                    <input name="reset" type="reset" value="Borrar"> 
                </form>
            
    </body>
</html>
