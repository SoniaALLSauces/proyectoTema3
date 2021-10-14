<?php

/* 
 * Author: Sonia Antón Llanes
 * Created on: 05-octubre-2021
 * Ejercicio 5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)
 */

    //Creamos un objeto DateTime inicializada a un valor:
    // new DateTime ('Y-m-d H:m:s');
    $fechaDada = new DateTime('1979-04-19');
    echo "<p>Muestro una fecha con timestamp</p>";
    // Timestamp es una medida en segundos que han transcurrido desde las 0 horas del 1 de enero de 1970 GMT 
    echo $fechaDada ->getTimestamp();