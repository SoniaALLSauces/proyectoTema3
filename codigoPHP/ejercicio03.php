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

    echo "<p>Muestro la fecha y hora actual usando la funcion date() y time()</p>";
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
    echo "<p>Usando la clase DateTime</p>";
    echo $fechaHoraActual;