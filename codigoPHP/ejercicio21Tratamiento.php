<?php

    /* 
    * Author: Sonia Antón Llanes
    * Created on: 21-octubre-2021
    * Ejercicio 21. Construir un formulario para recoger un cuestionario realizado a una persona y 
    * enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
    */

            echo "<p>Tu nombre es: ".$_REQUEST['nombre']."</p>";
            echo "<p>Curso matriculado: ".$_REQUEST['curso']."</p>";
            
            //$_REQUEST
                echo "<tr>";
                    echo "<th><h4>Contenido variable \$_REQUEST </h4></th>";
                echo "</tr>";
                echo "<tr> <td>";
                    echo "<pre>";
                    print_r($_REQUEST);
                    echo "</pre";
                echo "</td> </tr>";
            
?>
