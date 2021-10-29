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
        <h2>Formulario Datos Personales</h2>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 27-octubre-2021
             * Ejercicio 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la  misma página las preguntas y 
             * las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, 
             * pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
             */
            
            require_once '../core/210322ValidacionFormularios.php'; //Importamos la libreria Validación para errores
            
            //Variables:
            $entradaOK = true;  //Variable que indica que todo va bien
            $aErrores = array(     //Array para guardar los errores del formulario
                'eNombre' => null,   //E inicializo cada elemento
                'eApellido1' => null,
                'eApellido2' => null,
                'eDni' => null,
                'eFechaNac' => null,
                'eCurso' => null
                );
            $aRespuestas = array(     //Array para guardar las entradas del formulario correctas
                'nombre' => null,   //E inicializo cada elemento
                'apellido1' => null,
                'apellido2' => null,
                'dni' => null,
                'fechaNac' => null,
                'curso' => null
                );
            
            //If si pulso enviar valido cada entrada con la libreria de validación importada 
            if (isset($_POST['submit'])){  //Pulso el boton enviar
                //Valido cada campo y si hay algun error lo guardo en el array aErrores
                $aErrores['eNombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], 50, 1, 1);
                $aErrores['eApellido1']= validacionFormularios::comprobarAlfabetico($_REQUEST['apellido1'], 50, 1, 1);
                $aErrores['eApellido2']= validacionFormularios::comprobarAlfabetico($_REQUEST['apellido2'], 50, 1, 0);
                $aErrores['eDni']= validacionFormularios::validarDni($_REQUEST['dni'], 1);
                $fechaHoy= date('d-m-Y');
                $aErrores['eFechaNac']= validacionFormularios::validarFecha($_REQUEST['fechaNac'],$fechaHoy, '01-01-1900', 1);
                $aErrores['eCurso']= validacionFormularios::comprobarAlfabetico($_REQUEST['curso'], 10, 1, 1);
                //Recorro array errores y compruebo si se ha incluido algún error
                foreach ($aErrores as $campo => $error){  
                    if ($error!=null){                    //si es distinto de null
                        $entradaOK = false;               //si hay algun error entradaOK es false
                    }
                } 
            }
            else{  //aun no se ha pulsado el boton enviar
                $entradaOK = false;   // si no se pulsa enviar, entradaOK es false
            }
            
            //If si las entradas del usuario son correctas o no
            if($entradaOK){  //Si todas las entradas son correctas
                //Relleno array eRespuestas con los datos introducidos por el usuario:
                $aRespuestas['nombre'] = $_REQUEST['nombre'];
                $aRespuestas['apellido1'] = $_REQUEST['apellido1'];
                $aRespuestas['apellido2'] = $_REQUEST['apellido2'];
                $aRespuestas['dni'] = $_REQUEST['dni'];
                $aRespuestas['fechaNac'] = strtotime($_REQUEST['fechaNac']);
                $aRespuestas['curso'] = $_REQUEST['curso'];
                //Muestro el mensaje de datos correctos
                echo "Datos sin errores";
                echo "<p>" . $aRespuestas['nombre'] . " " . $aRespuestas['apellido1'] . " " .  $aRespuestas['apellido2'] . "</p>";
                echo "<p>Curso matriculado: ".$_REQUEST['curso']."</p>";
            }
            else{  //Si las respuestas no son correctas o aun no se ha pulsado enviar
            ?>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <div class="dato"><label for="LbNombre">Nombre  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="nombre" id="LbNombre"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['eNombre']==NULL && isset($_POST['nombre'])) ? $_POST['nombre'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['eNombre'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eNombre']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbApellido1">Primer apellido  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="apellido1" id="LbApellido1"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['eApellido1']==NULL && isset($_POST['apellido1'])) ? $_POST['apellido1'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['eApellido1'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eApellido1']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbApellido2">Segundo apellido</label></div>
                                <div class="datoUsu"><input type="text" name="apellido2" id="LbApellido2"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['eApellido2']==NULL && isset($_POST['apellido2'])) ? $_POST['apellido2'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['eApellido2'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eApellido2']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dato"><label for="LbDNI">D.N.I.  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="dni" id="LbDNI" placeholder="00000000X"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['eDni']==NULL && isset($_POST['dni'])) ? $_POST['dni'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['eDni'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eDni']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbFechaNac">Fecha Nacimiento:</label></div>
                                <div class="datoUsu"><input type="text" name="fechaNac" id="LbFechaDni" placeholder="dd-mm-yyyy"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['eFechaNac']==NULL && isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['eFechaNac'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eFechaNac']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dato">Curso que estudias</div>
                                <div>
                                    <input type="radio" name="curso" id="LbCursoDAW" value="cursoDAW">
                                    <label for="LbCursoDAW">DAW</label>
                                    <input type="radio" name="curso" id="LbCursoDAM" value="cursoDAM">
                                    <label for="LbCursoDAM">DAM</label>
                                </div>
                                <div class="error"><?php
                                        if ($aErrores['eCurso'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['eCurso']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td><label for="LbCurso">Curso que estudias</label></td>
                            <td><input type="text" name="curso" id="LbCurso"
                                       value="<?php if($aErrores['eCurso'] == NULL && isset($_POST['curso'])) 
                                                { echo $_POST['curso'];}//Si no hay ningun error y se ha enviado mantenerlo?>"></td>
                            <td>
                                <?php
                                    if ($aErrores['eCurso'] != NULL) { //si hay errores muestra el mensaje
                                        echo "<span style=\"color:red;\">".$aErrores['eCurso']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                    }
                                ?>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><input id="submit" name="submit" type="submit" value="Enviar"></td>
                            <td><input id="value" name="reset" type="reset" value="Borrar"></td>
                        </tr>
                    </table>
                </form>
            <?php
            }
            ?>
    </body>
</html>
