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

