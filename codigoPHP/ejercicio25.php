<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sonia Anton Llanes - Ejercicio 00</title>
        <meta name="author" content="Sonia Antón Llanes">
        <meta name="description" content="Proyecto DAW2">
        <meta name="keywords" content="">
        <!-- <link href="../webroot/css/estiloej.css" rel="stylesheet" type="text/css">-->
        <link href="../webroot/images/mariposa_vintage.png" rel="icon" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <style>
            h2{color: #bb1212;
               font-family: 'Dancing Script', cursive;
               font-size: 32px;
               font-weight: bolder;
               vertical-align: middle;}
            table{width: 90%;
                  margin: 4%;}
            td{width: 25%;
               height: 60px;}
            div{width: 90%;
                margin: 8px;}
            .dato, .error{width: 100%;
                          height: 10px;
                          font-size: 15px;}
            .datoUsuOpc>input {background-color: lightgray;}
            .datoUsu>input,
            .datoUsuOpc>input{width: 100%;
                            height: 25px;
                            font-size: 16px;
                            border: none;
                            border-bottom: 1px solid black;
                            padding: 0 10px;}
            textarea{width: 100%;
                     height: 80px;
                     border: 1px solid black;
                     padding: 0 5%}
            .radio>label,
            .checkbox>label{display: inline-block;
                            width: 30%;} 
            #submit, #value{border: 1px solid black;
                            width: 50%;}
            .ast{color: #bb1212;}
        </style>
    </head>
    <body>
        <h2>Formulario Plantilla</h2>
            <?php

            /* 
             * Author: Sonia Antón Llanes
             * Created on: 28-octubre-2021
             * Ejercicio 25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
             */
            
            require_once '../core/210322ValidacionFormularios.php'; //Importamos la libreria Validación para errores
            
            //Variables:
            $entradaOK = true;  //Variable que indica que todo va bien
            
            $aErrores = array (     //Array para guardar los errores del formulario
                'alfabeticoObligatorio' => null,   //Alfabetico
                'alfabeticoOpcional' => null,
                'alfaNumericoObligatorio' => null, //Alfanumerico
                'alfaNumericoOpcional' => null,
                'enteroObligatorio' => null,       //Entero
                'enteroOpcional' => null,
                'floatObligatorio' => null,        //Float
                'floatOpcional' => null,
                'passwordObligatorio' => null,     //Password
                'passwordOpcional' => null,
                'dniObligatorio' => null,          //DNI
                'dniOpcional' => null,
                'fechaObligatorio' => null,        //Fecha
                'fechaOpcional' => null,
                'cpObligatorio' => null,           //Codigo Postal
                'cpOpcional' => null,
                'telefonoObligatorio' => null,    //Telefono
                'telefonoOpcional' => null,
                'emailObligatorio' => null,        //Email
                'emailOpcional' => null, 
                'urlObligatorio' => null,          //URL
                'urlOpcional' => null,
                'areaTextoOpcional' => null,       //TextArea
                'selectorRadio' => null,           //RadioButton
                'selectorCheckbox' => null,        //Checkbox
                'selectorLista' => null            //List
                );
            
            $aRespuestas = array (     //Array para guardar las respuestas introducidas en el formulario
                'alfabeticoObligatorio' => null,   //Alfabetico
                'alfabeticoOpcional' => null,
                'alfaNumericoObligatorio' => null, //Alfanumerico
                'alfaNumericoOpcional' => null,
                'enteroObligatorio' => null,       //Entero
                'enteroOpcional' => null,
                'floatObligatorio' => null,        //Float
                'floatOpcional' => null,
                'passwordObligatorio' => null,     //Password
                'passwordOpcional' => null,
                'dniObligatorio' => null,          //DNI
                'dniOpcional' => null,
                'fechaObligatorio' => null,        //Fecha
                'fechaOpcional' => null,
                'cpObligatorio' => null,           //Codigo Postal
                'cpOpcional' => null,
                'telefonoObligatorio' => null,    //Telefono
                'telefonoOpcional' => null,
                'emailObligatorio' => null,        //Email
                'emailOpcional' => null, 
                'urlObligatorio' => null,          //URL
                'urlOpcional' => null,
                'areaTextoOpcional' => null,       //TextArea
                'selectorRadio' => null,           //RadioButton
                'selectorCheckbox' => null,        //Checkbox
                'selectorLista' => null            //List
                );
            
             //If SUBMIT: si pulso enviar valido cada entrada con la libreria de validación importada y relleno errores
            if (isset($_POST['submit'])){  
                //Valido cada campo y si hay algun error lo guardo en el array aErrores
                #OBLIGATORIOS
                    $arrayErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticoObligatorio'], 50, 1, 1);  //Máximo, mínimo y opcionalidad
                    $arrayErrores['alfaNumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfaNumericoObligatorio'], 50, 1, 1); //Máximo, mínimo y opcionalidad
                    $arrayErrores['enteroObligatorio'] = validacionFormularios::comprobarEntero($_POST['enteroObligatorio'], PHP_INT_MAX, -PHP_INT_MAX, 1); //Máximo, mínimo y opcionalidad
                    $arrayErrores['floatObligatorio'] = validacionFormularios::comprobarFloat($_POST['floatObligatorio'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 1); //Máximo, mínimo y opcionalidad
                    $arrayErrores['passwordObligatorio'] = validacionFormularios::validarPassword($_POST['passwordObligatorio'], 6, 1); //Longitud mínima y opcionalidad
                    $arrayErrores['dniObligatorio'] = validacionFormularios::validarDni($_POST['dniObligatorio'], 1); //Opcionalidad
                    $arrayErrores['fechaObligatorio'] = validacionFormularios::validarEmail($_POST['fechaObligatorio'],"01/01/2200", "01/01/1900", 1); //Opcionalidad
                    $arrayErrores['cpObligatorio'] = validacionFormularios::validarURL($_POST['cpObligatorio'], 1); //Opcionalidad
                    $arrayErrores['telefonoObligatorio'] = validacionFormularios::validarTelefono($_POST['telefonoObligatorio'], 1); //Opcionalidad
                    $arrayErrores['emailObligatorio'] = validacionFormularios::validarCp($_POST['emailObligatorio'], 1); //Opcionalidad
                    $arrayErrores['urlObligatorio'] = validacionFormularios::validarFecha($_POST['urlObligatorio'],  1); //Opcionalidad
                    if(!isset($_POST['selectorRadio'])){$arrayErrores['selectorRadio'] = "Debe marcarse un valor";}
                    if(!isset($_POST['selectorCheckbox'])){$arrayErrores['selectorCheckbox'] = "Debe marcarse al menos un valor";}
                    $arrayErrores['selectorLista'] = validacionFormularios::validarElementoEnLista($_POST['selectorLista'], array("opcion1", "opcion2", "opcion3")); //Opciones de la lista

                #OPCIONALES
                    $arrayErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_POST['alfabeticoOpcional'], 50, 1, 0);
                    $arrayErrores['alfaNumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_POST['alfaNumericoOpcional'], 50, 1, 0);
                    $arrayErrores['enteroOpcional'] = validacionFormularios::comprobarEntero($_POST['enteroOpcional'], PHP_INT_MAX, -PHP_INT_MAX, 0);
                    $arrayErrores['floatOpcional'] = validacionFormularios::comprobarFloat($_POST['floatOpcional'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 0);
                    $arrayErrores['passwordOpcional'] = validacionFormularios::validarPassword($_POST['passwordOpcional'], 6, 0); 
                    $arrayErrores['dniOpcional'] = validacionFormularios::validarDni($_POST['dniOpcional'], 0);
                    $arrayErrores['fechaOpcional'] = validacionFormularios::validarEmail($_POST['fechaOpcional'], "01/01/2200", "01/01/1900", 0);
                    $arrayErrores['cpOpcional'] = validacionFormularios::validarURL($_POST['cpOpcional'], 0);
                    $arrayErrores['telefonoOpcional'] = validacionFormularios::validarTelefono($_POST['telefonoOpcional'], 0);
                    $arrayErrores['emailOpcional'] = validacionFormularios::validarCp($_POST['emailOpcional'], 0);
                    $arrayErrores['urlOpcional'] = validacionFormularios::validarFecha($_POST['urlOpcional'], 0);
                    $arrayErrores['areaTextoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_POST['areaTextoOpcional'], 200, 1, 0); //TextArea normalmente es opcional escribir o no en el

                foreach ($aErrores as $campo => $error){  //Recorro array errores y compruebo si se ha incluido algún error
                    if ($error!=null){       //si es distinto de null
                        $entradaOK = false;  //si hay algun error entradaOK es false
                    }
                } 
            }
            else{  //aun no se ha pulsado el boton enviar
                $entradaOK = false;   // si no se pulsa enviar, entradaOK es false
            }
             
             //If SUBMIT: si pulso enviar valido cada entrada con la libreria de validación importada y relleno errores
            if($entradaOK){  //Si todas las entradas son correctas
                //Relleno array eRespuestas con los datos introducidos por el usuario:
                $aRespuestas['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio'];
                
                
                //Muestro el mensaje de datos correctos
                echo "Datos sin errores";
                echo $aRespuestas;
            }
            else{  //Si las respuestas no son correctas o aun no se ha pulsado enviar
            ?>
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                    <!-- ALFABÉTICO -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbAlfabeticoObligatorio">Alfabetico Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="alfabeticoObligatorio" id="LbAlfabeticoObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['alfabeticoObligatorio']==NULL && isset($_POST['alfabeticoObligatorio'])) ? $_POST['alfabeticoObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['alfabeticoObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['alfabeticoObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbAlfabeticoOpcional">Alfabetico Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="alfabeticoOpcional" id="LbAlfabeticoOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['alfabeticoOpcional']==NULL && isset($_POST['alfabeticoOpcional'])) ? $_POST['alfabeticoOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['alfabeticoOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['alfabeticoOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- ALFANUMÉRICO -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbAlfaNumericoObligatorio">Alfanumérico Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="alfaNumericoObligatorio" id="LbAlfaNumericoObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['alfaNumericoObligatorio']==NULL && isset($_POST['alfaNumericoObligatorio'])) ? $_POST['alfaNumericoObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['alfaNumericoObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['alfaNumericoObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbAlfaNumericoOpcional">Alfanumérico Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="alfaNumericoOpcional" id="LbAlfaNumericoOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['alfaNumericoOpcional']==NULL && isset($_POST['alfaNumericoOpcional'])) ? $_POST['alfaNumericoObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['alfaNumericoOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['alfaNumericoOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- ENTERO -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbEnteroObligatorio">Entero Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="enteroObligatorio" id="LbEnteroObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['enteroObligatorio']==NULL && isset($_POST['enteroObligatorio'])) ? $_POST['enteroObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['enteroObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['enteroObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbEnteroOpcional">Entero Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="enteroOpcional" id="LbEnteroOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['enteroOpcional']==NULL && isset($_POST['enteroOpcional'])) ? $_POST['enteroOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['enteroOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['enteroOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- FLOAT -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbFloatObligatorio">Float Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="floatObligatorio" id="LbFloatObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['floatObligatorio']==NULL && isset($_POST['floatObligatorio'])) ? $_POST['floatObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['floatObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['floatObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbFloatOpcional">Float Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="floatOpcional" id="LbFloatOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['floatOpcional']==NULL && isset($_POST['floatOpcional'])) ? $_POST['floatOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['floatOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['floatOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- PASSWORD -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbPasswordObligatorio">Password Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="passwordObligatorio" id="LbPasswordObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['passwordObligatorio']==NULL && isset($_POST['passwordObligatorio'])) ? $_POST['passwordObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['passwordObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['passwordObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbPasswordOpcional">Password Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="passwordOpcional" id="LbPasswordOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['passwordOpcional']==NULL && isset($_POST['passwordOpcional'])) ? $_POST['passwordOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['passwordOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['passwordOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- DNI -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbDniObligatorio">DNI Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="dniObligatorio" id="LbDniObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['dniObligatorio']==NULL && isset($_POST['dniObligatorio'])) ? $_POST['dniObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['dniObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['dniObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbDniOpcional">DNI Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="dniOpcional" id="LbDniOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['dniOpcional']==NULL && isset($_POST['dniOpcional'])) ? $_POST['dniOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['dniOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['dniOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- Fecha -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbFechaObligatorio">Fecha Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="fechaObligatorio" id="LbFechaObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['fechaObligatorio']==NULL && isset($_POST['fechaObligatorio'])) ? $_POST['fechaObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['fechaObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['fechaObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbFechaOpcional">Fecha Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="fechaOpcional" id="LbFechaOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['fechaOpcional']==NULL && isset($_POST['fechaOpcional'])) ? $_POST['fechaOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['fechaOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['fechaOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- CODIGO POSTAL -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbCpObligatorio">Codigo Postal Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="cpObligatorio" id="LbCpObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['cpObligatorio']==NULL && isset($_POST['cpObligatorio'])) ? $_POST['cpObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['cpObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['cpObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LBCpOpcional">Codigo Postal Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="cpOpcional" id="LBCpOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['cpOpcional']==NULL && isset($_POST['cpOpcional'])) ? $_POST['cpOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['cpOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['cpOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- TELEFONO -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbTelefonoObligatorio">Teléfono Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="telefonoObligatorio" id="LbTelefonoObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['telefonoObligatorio']==NULL && isset($_POST['telefonoObligatorio'])) ? $_POST['telefonoObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['telefonoObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['telefonoObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbTelefonoOpcional">Teléfono Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="telefonoOpcional" id="LbTelefonoOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['telefonoOpcional']==NULL && isset($_POST['telefonoOpcional'])) ? $_POST['cpOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['telefonoOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['telefonoOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- EMAIL -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbEmailObligatorio">Email Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="emailObligatorio" id="LbEmailObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['emailObligatorio']==NULL && isset($_POST['emailObligatorio'])) ? $_POST['emailObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['emailObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['emailObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbEmailOpcional">Email Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="emailOpcional" id="LbEmailOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['emailOpcional']==NULL && isset($_POST['emailOpcional'])) ? $_POST['emailOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['emailOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['emailOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- URL -->
                        <tr>
                            <td>
                                <div class="dato"><label for="LbUrlObligatorio">URL Obligatorio  <span class="ast">*</span></label></div>
                                <div class="datoUsu"><input type="text" name="urlObligatorio" id="LbUrlObligatorio"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['urlObligatorio']==NULL && isset($_POST['urlObligatorio'])) ? $_POST['urlObligatorio'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['urlObligatorio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['urlObligatorio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                            <td>
                                <div class="dato"><label for="LbUrlOpcional">URL Opcional</label></div>
                                <div class="datoUsuOpc"><input type="text" name="urlOpcional" id="LbUrlOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['urlOpcional']==NULL && isset($_POST['urlOpcional'])) ? $_POST['urlOpcional'] : ""; 
                                              ?>"></div>
                                <div class="error"><?php
                                        if ($aErrores['urlOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['urlOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- TEXT AREA: Alfanumérico -->
                        <tr>
                            <td colspan="2">  <!-- colspan depende de las columnas que tengamos en nuestro formulario -->
                                <div class="dato"><label for="LbAreaTextoOpcional">Area de Texto (opcional)</label></div>
                                <div class="datoUsu"><textarea name="areaTextoOpcional" id="LbAreaTextoOpcional"
                                       value="<?php  //Si no hay ningun error y se ha enviado mantenerlo
                                                echo $resultado = ($aErrores['areaTextoOpcional']==NULL && isset($_POST['areaTextoOpcional'])) ? $_POST['areaTextoOpcional'] : ""; 
                                              ?>">
                                    </textarea></div>
                                <div class="error"><?php
                                        if ($aErrores['areaTextoOpcional'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['areaTextoOpcional']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- RADIO BUTTON -->
                        <tr>
                            <td colspan="2">
                                <div class="dato"><strong>Radio Button </strong>(selecciona una opción): <span class="ast">*</span></div>
                                <div class="radio">
                                    <label for="LbRO1">
                                        <input type="radio" id="LbRO1" name="selectorRadio" value="Opcion 1" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Opcion 1"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 1</label>
                                    <label for="LbRO2">
                                        <input type="radio" id="LbRO2" name="selectorRadio" value="Opcion 2" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Opcion 2"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 2</label>
                                    <label for="LbRO3">
                                        <input type="radio" id="LbRO3" name="selectorRadio" value="Opcion 3" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Opcion 3"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 3</label>
                                </div>
                                <div class="error"><?php
                                        if ($aErrores['selectorRadio'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['selectorRadio']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                    <!-- CHECKBOX -->
                        <tr>  <!-- OBLIGATORIO -->
                            <td colspan="2">
                                <div class="dato"><strong>CheckBox </strong>(selecciona 1 o más opciones): <span class="ast">*</span></div>
                                <div class="checkbox">
                                    <label for="selectorCheckBox1">
                                        <input type="checkbox" id="LbCO1" name="selectorCheckbox1" value="Opcion 1" <?php if(isset($_POST['selectorCheckbox']['opcion1'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 1</label>
                                    <label for="selectorCheckBox2">
                                        <input type="checkbox" id="LbCO2" name="selectorCheckBox2" value="Opcion 2" <?php if(isset($_POST['selectorCheckbox']['Opcion 2'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 2</label>
                                    <label for="selectorCheckBox3">
                                        <input type="checkbox" id="LbCO3" name="selectorCheckBox3" value="Opcion 3" <?php if(isset($_POST['selectorCheckbox']['Opcion 3'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 3</label>
                                </div>
                                <div class="error"><?php
                                        if ($aErrores['selectorCheckbox'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['selectorCheckbox']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
                            </td>
                        </tr>
                        <tr>  <!-- OPCIONAL -->
                            <td colspan="2">
                                <div class="dato"><strong>CheckBox Opcional </strong>(selecciona 0, 1 o más opciones): </div>
                                <div class="checkbox">
                                    <label for="selectorCheckbox1Opcional">
                                        <input type="checkbox" id="LbCO1" name="selectorCheckbox1Opcional" value="Opcion 1" <?php if(isset($_POST['selectorCheckbox']['opcion1'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 1 opcional</label>
                                    <label for="selectorCheckbox2Opcional">
                                        <input type="checkbox" id="LbCO2" name="selectorCheckbox2Opcional" value="Opcion 2" <?php if(isset($_POST['selectorCheckbox']['Opcion 2'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 2 opcional</label>
                                    <label for="selectorCheckbox3Opcional">
                                        <input type="checkbox" id="LbCO3" name="selectorCheckbox3Opcional" value="Opcion 3" <?php if(isset($_POST['selectorCheckbox']['Opcion 3'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                        Opcion 3 opcional</label>
                                </div>
                                <!-- Si no se selecciona ninguno no hay errores -->
                            </td>
                        </tr>
                    <!-- LISTA -->
                        <tr>  <!-- OBLIGATORIO -->
                            <td colspan="2">
                                <div class="dato"><strong>List </strong>(selecciona una opción): <span class="ast">*</span></div>
                                <div class="list">
                                    <label>
                                        <select name="selectorLista">
                                            <option value="opcion1" <?php if(isset($_POST['selectorLista'])){if($arrayErrores['selectorLista'] == NULL && $_POST['selectorLista'] == "opcion1"){ echo "selected";}} ?>>Opcion 1</option>
                                            <option value="opcion2" <?php if(isset($_POST['selectorLista'])){if($arrayErrores['selectorLista'] == NULL && $_POST['selectorLista'] == "opcion2"){ echo "selected";}} ?>>Opcion 2</option>
                                            <option value="opcion3" <?php if(isset($_POST['selectorLista'])){if($arrayErrores['selectorLista'] == NULL && $_POST['selectorLista'] == "opcion3"){ echo "selected";}} ?>>Opcion 3</option>
                                        </select>
                                    </label><br><br>
                                </div>
                                <div class="error"><?php
                                        if ($aErrores['selectorCheckbox'] != NULL) { //si hay errores muestra el mensaje
                                            echo "<span style=\"color:red;\">".$aErrores['selectorCheckbox']."</span>"; //aparece el mensaje de error que tiene el array aErrores
                                        }
                                     ?></div>
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
