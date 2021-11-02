<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 13</title>
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
             * Ejercicio 13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta
             */

            //Necesito un archivo donde ir guardando las visitas 
                $archivo = "../doc/contadorvisitas.txt";
                $fecha = new DateTime('2021-10-23');
                $fechaActual = new DateTime();
                
                /*$abroArchivo = fopen($archivo, "r");  //primero abrimos en modo lectura
                if ($abroArchivo){
                    $contadorVisitas = fread ($abroArchivo, filesize($archivo));  //vemos el archivo
                    $contadorVisitas++;  //sumamos 1 a contadorVisitas
                    fclose($abroArchivo);  //cierro el archivo
                }
                
                $abroArchivo = fopen($archivo, "w+");  //ahora abro en modo escritura
                if ($abroArchivo){
                    fwrite($abroArchivo, $contadorVisitas);  //escribo en el archivo el valor de contadorVisitas
                    fclose($abroArchivo);  //y cierro el archivo
                }*/
                
                $contenido = trim(file_get_contents($archivo));  //extraigo el contenido del archivo
                $visitas = intval($contenido);  //guardo el contenido del archivo en la variable $visitas
                if ($fechaActual>$fecha){
                    $visitas++;  //aumento 1 el valor de visitas (una visita más)
                }
                file_put_contents($archivo, $visitas);  //modifico el archivo poniendo el nuevo valor de visitas
                
                echo "Desde el día " . $fecha->format('d-m-y') . " se han recibido $visitas visitas";
            
            ?>
        </div>
    </body>
</html>
