<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Nerea Álvarez Justel">
        <meta name="application-name" content="Sitio Web">
        <meta name="description" content="Desarrollo del segundo curso de DAW">
        <meta name="robots" content="index, follow" />
        <title>DAW. Nerea Álvarez Justel</title>
<!-- CSS -->
        <link href="../webroot/css/estilos.css" rel="stylesheet" type="text/css">
<!-- Favicon -->
        <link rel="icon" href="../../../../favicon.png" type="x-icon">
<!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
        <style>
            div{
                margin-top: 10px;
                font-family: 'Caveat';
            }
            #RO1,#RO2,#RO3,#CO1,#CO2,#CO3  {
                 width: 15px;
                height: 20px;
            }
            input{
                width: 190px;
                height: 20px;
                text-align: center;
                margin-top: 10px;
                border-radius: 8px;
            }
            #enviar{
                width: 65px;
                height: 25px;
                margin-top: 3%;
                margin-left: 25%;
            }
            .introO{
                    background-color: #D5B7FF;
                    font-size:small;
            }	
            .error{
                    color:#FF0000; 
                    font-size: medium;
                    font-weight: bolder;
                    font-family: 'Arial';
            }  
            textarea{
                margin-top: 10px;
                width: 190px;
                height: 50px;
                text-align: center;
                border-radius: 8px;
            }
        </style>
		
    </head>

    <body> 
        <!-- Header -->
        <header id="header">
            <a href="../../../doc/cv.pdf" target="_blank"><img src="../webroot/media/images/cv.png" alt="CV" width="55" class="icono_link"/></a>
            <a href="../../../../index.html"><img src="../webroot/media/images/logo.png" alt="Logo" width="150" class="icono_logo"/></a>
            <a href="https://github.com/N18AJ" target="_blank"><img src="../webroot/media/images/git.png" alt="GitHub" width="65" class="icono_git"/></a>
        </header>


        <!-- Main -->
        <div id="main">

            <!-- Tiles -->
            <section class="tiles">
                <!-- NAV -->
                <nav class="segunda_header" id="menu">
                    <ul>
                        <a href="../indexTema3.html"><li>Tema 3</li></a>
                    </ul>
                </nav>
                <article>
                    <header class="major">
                        <h3>Ejercicio 25</h3>
                    </header>
                    <div>
                        <?php 
                        /*
                        @author: Nerea Álvarez Justel
                        @since: 19/10/2020
                        
                        @description: 25.Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
                        */

				
                        require '../core/201020libreriaValidacion.php'; //importamos la libreria de validacion
                        //constantes que contienen datos que necesitan las funciones de la libreria de validacion


                        define('OBLIGATORIO', 1); //si esta variable contiene 1 es que el campo del formulario es OBLIGATORIO
                        define('OPCIONAL', 0); //si esta variable contiene 0 es que el campo del formulario es OPCIONAL

                                $entradaOK = true; //inicializamos una variable que nos ayudara a controlar si todo esta correcto

                           //inicializamos un array que se encargara de recoger los errrorer(Campos vacios)
                        $aErrores = ['alfabeticoOpcional' => null,
                                 'alfabeticoObligatorio' => null,

                                 'alfanumericoOpcional' => null,
                                 'alfanumericoObligatorio' => null,

                                 'enteroOpcional' => null,
                                 'enteroObligatorio' => null,

                                 'floatOpcional' => null,
                                 'floatObligatorio' => null,

                                 'DniOpcional' => null,
                                 'DniObligatorio' => null,

                                 'telefonoOpcional' => null,
                                 'telefonoObligatorio' => null,

                                 'emailOpcional' => null,
                                 'emailObligatorio' => null,

                                 'passwordOpcional' => null,
                                 'passwordObligatorio' => null,

                                 'urlOpcional' => null,
                                 'urlObligatorio' => null,

                                 'cpOpcional' => null,
                                 'cpObligatorio' => null,

                                 'fechaOpcional' => null,
                                 'fechaObligatorio' => null,

                                 'textoObligatorio' => null,

                                 'radioObligatorio' => null,

                                 'checkboxObligatorio' => null,
                            
                                 'listaObligarotio' => null
                                 ];
                     //inicializamos un array que se encargara de recoger los datos del formulario(Campos vacios)
                     $aFormulario = ['alfabeticoOpcional' => null,
                                     'alfabeticoObligatorio' => null,

                                     'alfanumericoOpcional' => null,
                                     'alfanumericoObligatorio' => null,

                                     'enteroOpcional' => null,
                                     'enteroObligatorio' => null,

                                     'floatOpcional' => null,
                                     'floatObligatorio' => null,

                                     'DniOpcional' => null,
                                     'DniObligatorio' => null,

                                     'telefonoOpcional' => null,
                                     'telefonoObligatorio' => null,

                                     'emailOpcional' => null,
                                     'emailObligatorio' => null,

                                     'passwordOpcional' => null,
                                     'passwordObligatorio' => null,

                                     'urlOpcional' => null,
                                     'urlObligatorio' => null,

                                     'cpOpcional' => null,
                                     'cpObligatorio' => null,

                                     'fechaOpcional' => null,
                                     'fechaObligatorio' => null,

                                     'textoObligatorio' => null,

                                     'radioObligatorio' => null,

                                     'checkboxObligatorio' => null,
                         
                                     'listaObligarotio' => null
                                     ];

                            if (isset($_REQUEST['enviar']) && $_REQUEST['enviar'] == 'Enviar') { //Código que se ejecuta cuando se envía el formulario
                                             //La posición del array de errores recibe el mensaje de error si hubiera
                                                     //Campo MAX, MIN Y OBIGATORIO/OPCIONAL
                            $aErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'], 250, 1, 0); //maximo, mínimo y opcional
                            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], 250, 1, 1); //maximo, mínimo y obligatorio

                            $aErrores['alfanumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOpcional'], 250, 1, 0); //maximo, mínimo y opcional
                            $aErrores['alfanumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoObligatorio'], 250, 1, 1); //maximo, mínimo y obligatorio

                            $aErrores['enteroOpcional'] = validacionFormularios::comprobarEntero($_REQUEST['enteroOpcional'], PHP_INT_MAX, -PHP_INT_MAX, 0); //maximo, mínimo y opcional
                            $aErrores['enteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['enteroObligatorio'], PHP_INT_MAX, -PHP_INT_MAX, 1); //maximo, mínimo y obligatorio

                            $aErrores['floatOpcional'] = validacionFormularios::comprobarFloat($_REQUEST['floatOpcional'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 0); //maximo, mínimo y opcional
                            $aErrores['floatObligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['floatObligatorio'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 1); //maximo, mínimo y obligatorio

                            $aErrores['DniOpcional'] = validacionFormularios::validarDni($_REQUEST['DniOpcional'], 0); // opcional
                            $aErrores['DniObligatorio'] = validacionFormularios::validarDni($_REQUEST['DniObligatorio'], 1); // obligatorio

                            $aErrores['telefonoOpcional'] = validacionFormularios::validaTelefono($_REQUEST['telefonoOpcional'], 9, 0); //maximo y opcional
                            $aErrores['telefonoObligatorio'] = validacionFormularios::validaTelefono($_REQUEST['telefonoObligatorio'], 9, 1); //maximo y obligatorio

                            $aErrores['emailOpcional'] = validacionFormularios::validarEmail($_REQUEST['emailOpcional'], 50, 1, 0); //maximo, mínimo y opcional
                            $aErrores['emailObligatorio'] = validacionFormularios::validarEmail($_REQUEST['emailObligatorio'], 50, 1, 1); //maximo, mínimo y obligatorio

                            $aErrores['passwordOpcional'] = validacionFormularios::validarPassword($_REQUEST['passwordOpcional'], 8, 0); //maximo, mínimo y opcional
                            $aErrores['passwordObligatorio'] = validacionFormularios::validarPassword($_REQUEST['passwordObligatorio'], 8, 1); //maximo, mínimo y obligatorio

                            $aErrores['urlOpcional'] = validacionFormularios::validarURL($_REQUEST['urlOpcional'], 0); //opcional
                            $aErrores['urlObligatorio'] = validacionFormularios::validarURL($_REQUEST['urlObligatorio'], 1); //obligatorio

                            $aErrores['cpOpcional'] = validacionFormularios::validarCp($_REQUEST['cpOpcional'], 0); //opcional
                            $aErrores['cpObligatorio'] = validacionFormularios::validarCp($_REQUEST['cpObligatorio'], 1); //obligatorio

                            $aErrores['fechaOpcional'] = validacionFormularios::validarFecha($_REQUEST['fechaOpcional'],"2999-12-12", "1900-01-01", 0); //opcional
                            $aErrores['fechaObligatorio'] = validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'],"2999-12-12", "1900-01-01", 1); //obligatorio
                            
                            $aErrores['textoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['textoObligatorio'], 500, 1, 1); //obligatorio

                            if(!isset($_REQUEST['radioObligatorio'])){$aErrores['radioObligatorio'] = "Debe marcarse un valor";}
                            if(!isset($_REQUEST['checkboxObligatorio'])){$aErrores['checkboxObligatorio'] = "Debe marcarse al menos un valor";}  
                            
                            $aErrores['listaObligarotio'] = validacionFormularios::validarElementoEnLista($_REQUEST['listaObligarotio'], array("opcion1", "opcion2", "opcion3"));

                            
                             foreach ($aErrores as $campo => $error) { //recorre el array en busca de mensajes de error
                                if ($error != null) { //Si lo encuentra vacia el campo y cambia la condiccion
                                    /*$_REQUEST[$campo] = ""; //vacia los campos con errores*/
                                    $entradaOK = false; //Cambia la condiccion de la variable
                                }
                            }
                        } else {
                            $entradaOK = false; //cambiamos el valor de la variable
                        }

                        if ($entradaOK) { //si el valor es true mostramos los datos que hemos recogido
                                                //Guardamos los datos del primer campo en el array del Formulario

                            $aFormulario['alfabeticoOpcional'] = $_REQUEST['alfabeticoOpcional'];
                            $aFormulario['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio']; 

                            $aFormulario['alfanumericoOpcional'] = $_REQUEST['alfanumericoOpcional'];
                            $aFormulario['alfanumericoObligatorio'] = $_REQUEST['alfanumericoObligatorio']; 

                            $aFormulario['enteroOpcional'] = $_REQUEST['enteroOpcional'];
                            $aFormulario['enteroObligatorio'] = $_REQUEST['enteroObligatorio']; 

                            $aFormulario['floatOpcional'] = $_REQUEST['floatOpcional']; 
                            $aFormulario['floatObligatorio'] = $_REQUEST['floatObligatorio']; 

                            $aFormulario['DniOpcional'] = $_REQUEST['DniOpcional'];
                            $aFormulario['DniObligatorio'] = $_REQUEST['DniObligatorio'];

                            $aFormulario['telefonoOpcional'] = $_REQUEST['telefonoOpcional'];
                            $aFormulario['telefonoObligatorio'] = $_REQUEST['telefonoObligatorio'];

                            $aFormulario['emailOpcional'] = $_REQUEST['emailOpcional'];
                            $aFormulario['emailObligatorio'] = $_REQUEST['emailObligatorio'];

                            $aFormulario['passwordOpcional'] = $_REQUEST['passwordOpcional'];
                            $aFormulario['passwordObligatorio'] = $_REQUEST['passwordObligatorio'];

                            $aFormulario['urlOpcional'] = $_REQUEST['urlOpcional'];
                            $aFormulario['urlObligatorio'] = $_REQUEST['urlObligatorio'];

                            $aFormulario['cpOpcional'] = $_REQUEST['cpOpcional'];
                            $aFormulario['cpObligatorio'] = $_REQUEST['cpObligatorio'];

                            $aFormulario['fechaOpcional'] = $_REQUEST['fechaOpcional'];
                            $aFormulario['fechaObligatorio'] = $_REQUEST['fechaObligatorio'];

                            $aFormulario['textoObligatorio'] = $_REQUEST['textoObligatorio'];

                            $aFormulario['radioObligatorio'] = $_REQUEST['radioObligatorio'];
                            
                            $aFormulario['checkboxObligatorio'] = $_REQUEST['checkboxObligatorio'];
                            
                            $aFormulario['listaObligarotio'] = $_REQUEST['listaObligarotio'];


                                        //Mostramos los datos por pantalla        
                            echo "Alfabético opcional: " . $aFormulario['alfabeticoOpcional'] . "<br>";
                            echo "Alfabético obligatorio: " . $aFormulario['alfabeticoObligatorio'] . "<br><br>";

                            echo "Alfanumérico opcional: " . $aFormulario['alfanumericoOpcional'] . "<br>";
                            echo "Alfanumérico obligatorio: " . $aFormulario['alfanumericoObligatorio'] . "<br><br>";

                            echo "Entero opcional: " . $aFormulario['enteroOpcional'] . "<br>";
                            echo "Entero obligatorio: " . $aFormulario['enteroObligatorio'] . "<br><br>";

                            echo "Float opcional: " . $aFormulario['floatOpcional'] . "<br>";
                            echo "Float obligatorio: " . $aFormulario['floatObligatorio'] . "<br><br>";

                            echo "DNI opcional: " . $aFormulario['DniOpcional'] . "<br>";
                            echo "DNI obligatorio: " . $aFormulario['DniObligatorio'] . "<br><br>";

                            echo "Telefono opcional: " . $aFormulario['telefonoOpcional'] . "<br>";
                            echo "Telefono obligatorio: " . $aFormulario['telefonoObligatorio'] . "<br><br>";

                            echo "E-mail opcional: " . $aFormulario['emailOpcional'] . "<br>";
                            echo "E-mail obligatorio: " . $aFormulario['emailObligatorio'] . "<br><br>";

                            echo "Password opcional: " . $aFormulario['passwordOpcional'] . "<br>";
                            echo "Password obligatorio: " . $aFormulario['passwordObligatorio'] . "<br><br>";

                            echo "URL opcional: " . $aFormulario['urlOpcional'] . "<br>";
                            echo "URL obligatorio: " . $aFormulario['urlObligatorio'] . "<br><br>";

                            echo "CP opcional: " . $aFormulario['cpOpcional'] . "<br>";
                            echo "CP obligatorio: " . $aFormulario['cpObligatorio'] . "<br><br>";

                            echo "Fecha opcional: " . $aFormulario['fechaOpcional'] . "<br>";
                            echo "Fecha obligatorio: " . $aFormulario['fechaObligatorio'] . "<br><br>";

                            echo "Texto obligatorio: " . $aFormulario['textoObligatorio'] . "<br><br>";

                            echo "Radio button: " . $aFormulario['radioObligatorio'] . "<br><br>";
                            
                            echo "Checkbox: ";
                            if(isset($aFormulario['checkboxObligatorio']['opcion1'])){
                                echo $aFormulario['checkboxObligatorio']['opcion1'] . " ";
                            }
                            if(isset($aFormulario['checkboxObligatorio']['opcion2'])){
                                echo $aFormulario['checkboxObligatorio']['opcion2'] . " ";
                            }
                            if(isset($aFormulario['checkboxObligatorio']['opcion3'])){
                                echo $aFormulario['checkboxObligatorio']['opcion3'];
                            }
                            
                            echo "Lista: " . $aFormulario['listaObligarotio'] . "<br><br>";

                        } else { //Mostramos el formulario hasta que se rellenen los campos correctamente
                    ?>
            <form name="formulario25" action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
                <div class="cuadro">
                    <table>
                        <caption>Plantilla Formulario PHP</caption>
<!------------------------------------------- ALFABETICO ----------------------------------------->					
                                <tr>
                                    <td>Alfabético Opcional</td>
                                    <td>
                                        <input type="text" name="alfabeticoOpcional"  aria-describedby="Alfabético Opcional" placeholder="Introduzca letras: " 
                                            value="<?php if (isset($_REQUEST['alfabeticoOpcional']) && is_null($aErrores['alfabeticoOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['alfabeticoOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error">  
                                        <?php if ($aErrores['alfabeticoOpcional'] != NULL) {
                                            echo $aErrores['alfabeticoOpcional']; //mensaje de error que tiene el array aErrores  
                                         } ?>  
                                    </td>  
                                </tr>	
                                <tr class="lin">
                                    <td>Alfabético Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="text" name="alfabeticoObligatorio"  aria-describedby="Alfabético Obligatorio" placeholder="Introduzca letras: " 
                                            value="<?php if (isset($_REQUEST['alfabeticoObligatorio']) && is_null($aErrores['alfabeticoObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['alfabeticoObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['alfabeticoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['alfabeticoObligatorio']; //mensaje de error que tiene el array aErrores  
                                         } ?>
                                    </td> 
                                </tr> 
<!------------------------------------------ ALFANUMERICO ---------------------------------------->					
                                <tr>
                                    <td>AlfaNúmerico Opcional</td>
                                    <td class="intro">
                                        <input type="text" name="alfanumericoOpcional"  aria-describedby="AlfaNumerico Opcional" placeholder="Introduzca números y letras: " 
                                            value="<?php if (isset($_REQUEST['alfanumericoOpcional']) && is_null($aErrores['alfanumericoOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['alfanumericoOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['alfanumericoOpcional'] != NULL) { 
                                            echo $aErrores['alfanumericoOpcional']; //mensaje de error que tiene el array aErrores
                                         } ?>       
                                    </td>           
                                </tr>   
                                <tr>
                                    <td>AlfaNúmerico Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="text" name="alfanumericoObligatorio"  aria-describedby="AlfaNumerico Obligatorio" placeholder="Introduzca números y letras: " 
                                            value="<?php if (isset($_REQUEST['alfanumericoObligatorio']) && is_null($aErrores['alfanumericoObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['alfanumericoObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['alfanumericoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['alfanumericoObligatorio']; //mensaje de error que tiene el array aErrores
                                        } ?>
                                    </td>
                                </tr> 
<!---------------------------------------------- ENTERO ----------------------------------------->					
                                <tr>
                                    <td>Entero Opcional</td>
                                    <td class="intro">
                                        <input type="text" name="enteroOpcional"  aria-describedby="Entero Opcional" placeholder="Introduzca número entero: " 
                                            value="<?php if (isset($_REQUEST['enteroOpcional']) && is_null($aErrores['enteroOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['enteroOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['enteroOpcional'] != NULL) { 
                                            echo $aErrores['enteroOpcional']; //mensaje de error que tiene el array aErrores
                                        } ?>
                                    </td>                 
                                </tr>   
                                <tr>
                                    <td>Entero Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="text" name="enteroObligatorio"  aria-describedby="Entero Obligatorio" placeholder="Introduzca número entero: " 
                                            value="<?php if (isset($_REQUEST['enteroObligatorio']) && is_null($aErrores['enteroObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['enteroObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['enteroObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                            echo $aErrores['enteroObligatorio']; //mensaje de error que tiene el array aErrores
                                        } ?>
                                    </td>
                                </tr> 
<!----------------------------------------------- FLOAT ------------------------------------------>					
                                <tr>
                                    <td>Float Opcional</td>
                                    <td class="intro">
                                        <input type="text" name="floatOpcional"  aria-describedby="Float Opcional" placeholder="Introduzca número decimal: "
                                            value="<?php if (isset($_REQUEST['floatOpcional']) && is_null($aErrores['floatOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['floatOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['floatOpcional'] != NULL) { 
                                            echo $aErrores['floatOpcional']; //mensaje de error que tiene el array aErrores 
                                        } ?>
                                    </td>                  
                                </tr>   
                                <tr>
                                    <td>Float Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="text" name="floatObligatorio"  aria-describedby="Float Obligatorio" placeholder="Introduzca número decimal: "
                                            value="<?php if (isset($_REQUEST['floatObligatorio']) && is_null($aErrores['floatObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['floatObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['floatObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                            echo $aErrores['floatObligatorio']; //mensaje de error que tiene el array aErrores  
                                        } ?>
                                    </td>
                                </tr> 
<!----------------------------------------------- DNI ------------------------------------------>	
                                <tr>
                                    <td>DNI Opcional</td>
                                    <td class="intro">
                                        <input type="text" name="DniOpcional"  aria-describedby="Dni Opcional" placeholder="DNI ********X: "
                                            value="<?php if (isset($_REQUEST['DniOpcional']) && is_null($aErrores['DniOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['DniOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['DniOpcional'] != NULL) { 
                                            echo $aErrores['DniOpcional']; //mensaje de error que tiene el array aErrores
                                        } ?>
                                    </td>                 
                                </tr>   
                                <tr>
                                    <td>DNI Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="text" name="DniObligatorio"  aria-describedby="Dni Obligatorio" placeholder="DNI ********X: " 
                                            value="<?php if (isset($_REQUEST['DniObligatorio']) && is_null($aErrores['DniObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['DniObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['DniObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                            echo $aErrores['DniObligatorio']; //mensaje de error que tiene el array aErrores  
                                        } ?>
                                    </td>
                                </tr> 
<!---------------------------------------------- TELEFONO ----------------------------------------->	
                                <tr>
                                    <td>Teléfono Opcional</td>
                                    <td class="intro">
                                        <input type="tel" name="telefonoOpcional"  aria-describedby="Telefono Opcional" placeholder="Introduzca un teléfono: "
                                            value="<?php if (isset($_REQUEST['telefonoOpcional']) && is_null($aErrores['telefonoOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['telefonoOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['telefonoOpcional'] != NULL) { 
                                            echo $aErrores['telefonoOpcional']; //mensaje de error que tiene el array aErrores  
                                        } ?>
                                    </td>                
                                </tr>   
                                <tr>
                                    <td>Teléfono Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="tel" name="telefonoObligatorio"  aria-describedby="Telefono Obligatorio" placeholder="Introduzca una teléfono: "
                                            value="<?php if (isset($_REQUEST['telefonoObligatorio']) && is_null($aErrores['telefonoObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['telefonoObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['telefonoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['telefonoObligatorio']; //mensaje de error que tiene el array aErrores  
                                        } ?>
                                    </td>
                                </tr> 					
<!----------------------------------------------- E-MAIL ------------------------------------------>	
                                <tr>
                                    <td>E-mail Opcional</td>
                                    <td class="intro">
                                        <input type="email" name="emailOpcional"  aria-describedby="E-mail Opcional" placeholder="example@gmail.com "
                                            value="<?php if (isset($_REQUEST['floatOpcional']) && is_null($aErrores['emailOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['emailOpcional'];}
                                            ?>">
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['emailOpcional'] != NULL) { 
                                            echo $aErrores['emailOpcional']; //mensaje de error que tiene el array aErrores   
                                        } ?>
                                    </td>                 
                                </tr>   
                                <tr>
                                    <td>E-mail Obligatorio</td>
                                    <td>
                                        <input  class="introO" type="email" name="emailObligatorio"  aria-describedby="E-mail Obligatorio" placeholder="example@gmail.com " 
                                            value="<?php if (isset($_REQUEST['emailObligatorio']) && is_null($aErrores['emailObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['emailObligatorio'];} 
                                            ?>">
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['emailObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['emailObligatorio']; //mensaje de error que tiene el array aErrores  
                                        } ?>
                                    </td> 
                                </tr> 
<!------------------------------------------------ PASSWORD ------------------------------------------>	
				<tr>
                                    <td>Password Opcional</td>
                                    <td class="intro">
                                        <input type="password" name="passwordOpcional"  aria-describedby="Password Opcional" placeholder="Introduzca una contraseña: "
                                            value="<?php if (isset($_REQUEST['passwordOpcional']) && is_null($aErrores['passwordOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['passwordOpcional'];}
                                            ?>">
                                    </td>
                                        <td class="error"> 
                                            <?php if ($aErrores['passwordOpcional'] != NULL) { 
                                                echo $aErrores['passwordOpcional']; //mensaje de error que tiene el array aErrores  
                                            } ?>
                                        </td>                   
                                    </tr>   
                                    <tr>
                                        <td>Password Obligatorio</td>
                                        <td>
                                            <input  class="introO" type="password" name="passwordObligatorio"  aria-describedby="Password Obligatorio" placeholder="Introduzca una contraseña: " 
                                                value="<?php if (isset($_REQUEST['passwordObligatorio']) && is_null($aErrores['passwordObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['passwordObligatorio'];} 
                                                ?>">
                                        </td>
                                        <td class="error"> 
                                            <?php if ($aErrores['passwordObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                                echo $aErrores['passwordObligatorio']; //mensaje de error que tiene el array aErrores 
                                            } ?>
                                        </td>                   
                                    </tr>
<!------------------------------------------------- URL -------------------------------------------->	
                                    <tr>
                                        <td>URL Opcional</td>
                                        <td class="intro">
                                            <input type="url" name="urlOpcional"  aria-describedby="URL Opcional" placeholder="https://... "
                                                value="<?php if (isset($_REQUEST['urlOpcional']) && is_null($aErrores['urlOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['urlOpcional'];}
                                                ?>">
                                        </td>
                                        <td class="error">
                                            <?php if ($aErrores['urlOpcional'] != NULL) { 
                                                echo $aErrores['urlOpcional']; //mensaje de error que tiene el array aErrores
                                            } ?>
                                        </td>                   
                                    </tr>   
                                    <tr>
                                        <td>URL Obligatorio</td>
                                        <td>
                                            <input  class="introO" type="url" name="urlObligatorio"  aria-describedby="URL Obligatorio" placeholder="https://... " 
                                                value="<?php if (isset($_REQUEST['urlObligatorio']) && is_null($aErrores['urlObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['urlObligatorio'];} 
                                                ?>">
                                        </td>
                                        <td class="error"> 
                                            <?php if ($aErrores['urlObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                                echo $aErrores['urlObligatorio']; //mensaje de error que tiene el array aErrores 
                                            } ?>
                                        </td>                   
                                    </tr>
<!----------------------------------------------- CP -------------------------------------------->	
                                    <tr>
                                        <td>CP Opcional</td>
                                        <td class="intro">
                                            <input type="text" name="cpOpcional"  aria-describedby="CP Opcional" placeholder="Introduzca un Codigo Postal: "
                                                value="<?php if (isset($_REQUEST['cpOpcional']) && is_null($aErrores['cpOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['cpOpcional'];}
                                                ?>">
                                        </td>
                                        <td class="error"> 
                                            <?php if ($aErrores['cpOpcional'] != NULL) {  
                                                    echo $aErrores['cpOpcional']; //mensaje de error que tiene el array aErrores
                                            } ?>
                                        </td>                  
                                    </tr>   
                                    <tr>
                                        <td >CP Obligatorio</td>
                                        <td>
                                            <input  class="introO" type="text" name="cpObligatorio"  aria-describedby="CP Obligatorio" placeholder="Introduzca un Codigo Postal: " 
                                                value="<?php if (isset($_REQUEST['cpObligatorio']) && is_null($aErrores['cpObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['cpObligatorio'];} 
                                                ?>">
                                        </td>
                                        <td class="error"> 
                                            <?php if ($aErrores['cpObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error
                                                echo $aErrores['cpObligatorio']; //mensaje de error que tiene el array aErrores
                                            } ?>
                                        </td> 
                                    </tr> 	
<!------------------------------------------- FECHA ------------------------------------------>	
                                    <tr>
                                        <td>Fecha Opcional</td>
                                        <td class="intro">
                                            <input type="date" name="fechaOpcional"  aria-describedby="Fecha Opcional" placeholder="Fecha aaaa-mm-dd: "
                                                value="<?php if (isset($_REQUEST['fechaOpcional']) && is_null($aErrores['fechaOpcional'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['fechaOpcional'];}
                                                ?>">
                                        </td>
                                        <td class="error">
                                            <?php if ($aErrores['fechaOpcional'] != NULL) { 
                                                echo $aErrores['fechaOpcional']; //mensaje de error que tiene el array aErrores 
                                            } ?>
                                        </td>                  
                                    </tr>   
                                    <tr>
                                        <td>Fecha Obligatorio</td>
                                        <td>
                                            <input  class="introO" type="date" name="fechaObligatorio"  aria-describedby="Fecha Obligatorio" placeholder="Fecha aaaa-mm-dd: " 
                                                value="<?php if (isset($_REQUEST['fechaObligatorio']) && is_null($aErrores['fechaObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                    echo $_REQUEST['fechaObligatorio'];} 
                                                ?>">
                                        </td>
                                        <td class="error">
                                            <?php if ($aErrores['fechaObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                                echo $aErrores['fechaObligatorio']; //mensaje de error que tiene el array aErrores 
                                            } ?>
                                        </td> 
                                    </tr> 								
<!------------------------------------------- TEXTO ----------------------------------------->					

                                <tr class="lin">
                                    <td>Área de texto Obligatorio</td>
                                    <td>
                                        <textarea  class="introO" type="text" name="textoObligatorio"  aria-describedby="Área de texto Obligatorio" placeholder="Introduzca texto: " 
                                            value="<?php if (isset($_REQUEST['textoObligatorio']) && is_null($aErrores['textoObligatorio'])) { //comprobamos si ha introducido algo en el campo y que el array de errores este a null
                                                echo $_REQUEST['textoObligatorio'];} 
                                                ?>"></textarea>
                                    </td>
                                    <td class="error"> 
                                        <?php if ($aErrores['textoObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['textoObligatorio']; //mensaje de error que tiene el array aErrores  
                                         } ?>
                                    </td> 
                                </tr>
<!------------------------------------------- RADIO ------------------------------------------>	
                                <tr>
                                    <td>Radio Obligatorio</td>
                                    <td>
                                        <input type="radio" id="RO1" name="radioObligatorio" value="Opcion 1" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "Opcion 1"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO1">Opcion 1</label><br/>
                                        <input type="radio" id="RO2" name="radioObligatorio" value="Opcion 2" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "Opcion 2"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO2">Opcion 2</label><br/>
                                        <input type="radio" id="RO3" name="radioObligatorio" value="Opcion 3" <?php if(isset($_REQUEST['radioObligatorio']) && $_REQUEST['radioObligatorio'] == "Opcion 3"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO3">Opcion 3</label>
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['radioObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['radioObligatorio']; //mensaje de error que tiene el array aErrores 
                                        } ?>
                                    </td> 
                                </tr> 
<!------------------------------------------- CHECKBOX ------------------------------------------>	
                                <tr>
                                    <td>CheckBox Obligatorio</td>
                                    <td>
                                        <input type="checkbox" id="CO1" name="checkboxObligatorio[opcion1]" value="Opcion 1" <?php if(isset($_REQUEST['checkboxObligatorio']['opcion1'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="CO1">Opcion 1</label><br/>
                                        <input type="checkbox" id="CO2" name="checkboxObligatorio[opcion2]" value="Opcion 2" <?php if(isset($_REQUEST['checkboxObligatorio']['opcion2'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="CO2">Opcion 2</label><br/>
                                        <input type="checkbox" id="CO3" name="checkboxObligatorio[opcion3]" value="Opcion 3" <?php if(isset($_REQUEST['checkboxObligatorio']['opcion3'])){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="CO3">Opcion 3</label><br/>
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['checkboxObligatorio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['checkboxObligatorio']; //mensaje de error que tiene el array aErrores 
                                        } ?>
                                    </td> 
                                </tr> 
<!------------------------------------------- LISTA ------------------------------------------>	
                                <tr>
                                    <td>Lista Obligatorio</td>
                                    <td>
                                        <select name="listaObligarotio">
                                            <option value="opcion1" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "opcion1"){ echo "selected";}} ?>>Opcion 1</option>
                                            <option value="opcion2" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "opcion2"){ echo "selected";}} ?>>Opcion 2</option>
                                            <option value="opcion3" <?php if(isset($_REQUEST['listaObligarotio'])){if($aErrores['listaObligarotio'] == NULL && $_REQUEST['listaObligarotio'] == "opcion3"){ echo "selected";}} ?>>Opcion 3</option>
                                        </select>
                                    </td>
                                    <td class="error">
                                        <?php if ($aErrores['listaObligarotio'] != NULL) { //Si el array de errores NO está vacío sacamos el mensaje de error 
                                            echo $aErrores['listaObligarotio']; //mensaje de error que tiene el array aErrores 
                                        } ?>
                                    </td> 
                                </tr> 


                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input id="enviar" type="submit" value="Enviar" name="enviar"> <!--Boton de ENVIAR-->	</td>
                                </tr>								
					
                                </table>			
                            </div>	
                        </form>
			<?php } ?>
                    </div> 
                </article>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <a href="../../../../index.html"><div class="copyright">&copy; Nerea Álvarez Justel</div></a>
        </footer>
    </body>
</html>