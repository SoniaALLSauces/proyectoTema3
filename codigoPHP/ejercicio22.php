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
             * Created on: 22-octubre-2021
             * Ejercicio 21. Construir un formulario para recoger un cuestionario realizado a una persona y 
             * enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
             */
            
        //Inicializo variables: este primer formulario solo relleno y muestro
            //$entradaOK = true;  //inicializo la variable que indica que todo es correcto
            //$errores = array();  //inicializo la variable array de errores
            
        //
            if (isset($_POST['submit'])){
                echo "<p>Tu nombre es: ".$_REQUEST['nombre']."</p>";
                echo "<p>Curso matriculado: ".$_REQUEST['curso']."</p>";
            }
            else{
            ?>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
            <?php
            }
            ?>
        </div>
    </body>
</html>
