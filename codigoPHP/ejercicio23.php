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
             * Created on: 26-octubre-2021
             * Ejercicio 23. Construir un formulario para recoger un cuestionario realizado a una persona y 
             *  mostrar en la misma página las preguntas y las respuestas recogidas;
             *  en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
             */
            
            require_once '../core/210322ValidacionFormularios.php'; //Importamos la libreria Validación para errores
            
            //Variables:
            $entradaOK = true;  //Variable que indica que todo va bien
            $aErrores = array(     //Array para guardar los errores del formulario
                'eNombre' => null,   //E inicializo cada elemento
                'eCurso' => null
                );
            
            //If si pulso enviar valido cada entrada con la libreria de validación importada 
            if (isset($_POST['submit'])){  //Pulso el boton enviar
                $aErrores['eNombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 200, 1, 1);
                $aErrores['eCurso']= validacionFormularios::comprobarAlfabetico($_REQUEST['curso'], 10, 1, 1);
                foreach ($aErrores as $campo => $error){  //Recorro array errores y compruebo si se ha incluido algún error
                    if ($error!=null){                    //si es distinto de null
                        $entradaOK = false;               //si hay algun error entradaOK es false
                    }
                } 
            }
            else{  //aun no se ha pulsado el boton enviar
                $entradaOK = false;   // si no se pulsa enviar, entradaOK es false
            }
            //If si las entradas del usuario son correctas o no
            if($entradaOK){  //Si el formulario esta todo bien relleno
                echo "<p>Tu nombre es: ".$_REQUEST['nombre']."</p>";
                echo "<p>Curso matriculado: ".$_REQUEST['curso']."</p>";
            }
            else{  //Si las respuestas no son correctas o aun no se ha pulsado enviar
            ?>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                        <tr>
                            <td><label for="LbNombre">Introduce tu nombre</label></td>
                            <td><input type="text" name="nombre" id="LbNombre"></td>
                            <td>
                                <?php
                                    if ($aErrores['eNombre'] != NULL) { //si hay errores muestra el mensaje
                                        echo "<span style=\"color:red;\">".$aErrores['eNombre']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="LbCurso">Introduce el curso que estudias</label></td>
                            <td><input type="text" name="curso" id="LbCurso"></td>
                            <td>
                                <?php
                                    if ($aErrores['eCurso'] != NULL) { //si hay errores muestra el mensaje
                                        echo "<span style=\"color:red;\">".$aErrores['eCurso']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <input name="submit" type="submit" value="Enviar">
                    <input name="reset" type="reset" value="Borrar"> 
                </form>
            <?php
            }
            ?>
    </body>
</html>
