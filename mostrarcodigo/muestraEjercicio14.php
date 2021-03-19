<!DOCTYPE html>

<!-- Author: Sonia Antón Llanes -->
<!-- Created on: 14-octubre-2020 -->
<!-- Motrar Codigo Ejercicio 14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación.
Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación. -->

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 14</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <h2><a href="../indexProyectoTema3.html"><img src="../webroot/images/return.png" alt="return"></a>
            DWES - Tema 3. Características del Lenguaje PHP</h2>
        <h3>Código Ejercicio 14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación.
            <br>Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación</h3>
        <div class="php">
            <?php
                echo '<h3>Ejercicio 14</h3>';
                highlight_file('../codigoPHP/ejercicio14.php');
                echo '<h3>Libreria de funciones Calculadora</h3>';
                highlight_file('../core/calculadora.php');
            ?>
        </div>
    </body>
</html>
