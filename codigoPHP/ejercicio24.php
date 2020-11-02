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
            form{
                margin-left: 20%;
            }
            input{
                width: 150px;
                height: 20px;
            }
            #enviar{
                width: 60px;
                height: 20px;
                margin-top: 3%;
                margin-left: 30%;
            }
            #cont{
                margin-left: 20%;
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
                        <h3>Ejercicio 24</h3>
                    </header>
                    <div id="cont">
                        <h2>HTML Formularios</h2>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 18/10/2020

                          @description: 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las
                                        respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
                         */
                        require '../core/validacionFormulariosM.php';

                        define("MAX", PHP_FLOAT_MAX);
                        define("MIN", PHP_FLOAT_MIN < 0);
                        define("OBLIGATORIO", 1);

                        //Declaración de variables
                        $primerNumero = 0;
                        $segundoNumero = 0;
                        $suma = 0;
                        $resta = 0;
                        $multiplicacion = 0;
                        $division = 0;
                        $entradaOK = true;

                        //Declaración del array de errores
                        $aErrores = [
                            'primerNumero' => null,
                            'segundoNumero' => null,
                        ];

                        //Declaración del array de datos del formulario
                        $aFormulario = [
                            'primerNumero' => null,
                            'segundoNumero' => null,
                        ];

                        if (isset($_REQUEST['enviar'])) {//Codigo que se ejecuta cuando se envia el formulario
                            $aErrores['primerNumero'] = validacionFormularios::comprobarFloat($_REQUEST['primerNumero'], MAX, MIN, OBLIGATORIO);
                            $aErrores['segundoNumero'] = validacionFormularios::comprobarFloat($_REQUEST['segundoNumero'], MAX, MIN, OBLIGATORIO);

                            $aFormulario['primerNumero'] = $_REQUEST['primerNumero']; //en el array del formulario guardamos los datos
                            $aFormulario['segundoNumero'] = $_REQUEST['segundoNumero']; //en el array del formulario guardamos los datos


                            foreach ($aErrores as $campo => $error) { //recorre el array en busca de mensajes de error
                                if ($error != null) {
                                    $entradaOK = false; //cambia la condiccion de la variable
                                }
                            }
                        } else {
                            $entradaOK = false; //cambiamos el valor de la variable porque no se ha pulsado el bot�n de enviar
                        }

                        if ($entradaOK) { //si el valor es true procesamos los datos que hemos recogido    
                            $aFormulario['primerNumero'] = $_REQUEST['primerNumero']; //en el array del formulario guardamos los datos
                            $aFormulario['segundoNumero'] = $_REQUEST['segundoNumero']; //en el array del formulario guardamos los datos

                            $suma = $aFormulario['primerNumero'] + $aFormulario['segundoNumero']; //variable que tiene una operacion. Suma los 2 numeros del formulario
                            $resta = $aFormulario['primerNumero'] - $aFormulario['segundoNumero']; //variable que tiene una operacion. resta los 2 numeros del formulario
                            $multiplicacion = $aFormulario['primerNumero'] * $aFormulario['segundoNumero']; //variable que tiene una operacion. Multiplica los 2 numeros del formulario
                            //Realizamos una condición para efectuar la division
                            if ($aFormulario['segundoNumero'] > 0) {
                                $division = $aFormulario['primerNumero'] / $aFormulario['segundoNumero'];
                            }
                            ?>
                     <div id="cont">
                         <?php
                            //Mostramos los datos por pantalla        
                            echo "SUMA -> " . $aFormulario['primerNumero'] . " + " . $aFormulario['segundoNumero'] . " = " . $suma . "<br>";
                            echo "RESTA -> " . $aFormulario['primerNumero'] . " - " . $aFormulario['segundoNumero'] . " = " . $resta . "<br>";
                            echo "MULTIPLICACIÓN -> " . $aFormulario['primerNumero'] . " * " . $aFormulario['segundoNumero'] . " = " . $multiplicacion . "<br>";
                            if ($aFormulario['segundoNumero'] <= 0) {
                                echo "No se puede dividir por 0 o un numero inferior<br>";
                            } else {
                                echo "DIVISIÓN -> " . $aFormulario['primerNumero'] . " / " . $aFormulario['segundoNumero'] . " = " . $division . "<br>";
                            }
                        } else {//Código que se ejecuta antes de rellenar el formulario
                            ?>
                        </div>
                            <form name="form21" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <legend>Operaciones con numeros ENTEROS | Control de errores manteniendo los DATOS</legend>
                                <div>
                                    <label for="exampleNumero1">Primer Número: </label>
                                    <input  <?php
                                    if ($aErrores['primerNumero'] != NULL) {
                                        echo "style='border-color: red;'";
                                    }
                                    ?> 
                                        type="text" name="primerNumero" placeholder=" Introduzca un número"
                                        value="<?php echo isset($_REQUEST['primerNumero']) ? $_REQUEST['primerNumero'] : '' ?>">

                                    <?php
                                    if ($aErrores['primerNumero'] != NULL) {
                                        echo $aErrores['primerNumero']; //mensaje de error que tiene el array aErrores 
                                    }
                                    ?> 
                                </div>
                                <div>
                                    <label for="exampleNumero1">Segundo Número: </label>
                                    <input <?php
                                    if ($aErrores['segundoNumero'] != NULL) {
                                        echo "style='border-color: red;'";
                                    }
                                    ?> 
                                        type="text" name="segundoNumero" placeholder=" Introduzca un número"
                                        value="<?php echo isset($_REQUEST['segundoNumero']) ? $_REQUEST['segundoNumero'] : '' ?>">
                                        <?php
                                        if ($aErrores['segundoNumero'] != NULL) {
                                            echo $aErrores['segundoNumero']; //mensaje de error que tiene el array aErrores  
                                        }
                                        ?> 
                                </div>       
                                <input id="enviar" type="submit" value="Enviar" name="enviar">
                            </form>
                            <?php
                        }
                        ?>
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
