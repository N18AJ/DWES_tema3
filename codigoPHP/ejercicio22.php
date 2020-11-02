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
                        <h3>Ejercicio 22</h3>
                    </header>
                    <div id="cont">
                        <h2>HTML Formularios</h2>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 26/03/2020

                          @description: 22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                          recogidas.
                         */

                        if (isset($_REQUEST['enviar'])) {//Código que se ejecuta cuando se envía el formulario
                            //Declaración de variables
                            $primerNumero = "";
                            $segundoNumero = "";
                            $suma = "";
                            $resta = "";
                            $multiplicacion = "";
                            $division = "";

                            //Recoger los 2 números del $_POST
                            $primerNumero = $_REQUEST['primerNumero']; //variable que contiene el primer numero del formulario 
                            $segundoNumero = $_REQUEST['segundoNumero']; //variable que contiene el segundo numero del formulario
                            $suma = $primerNumero + $segundoNumero; //variable que tiene una operacion. Suma los 2 numeros del formulario
                            $resta = $primerNumero - $segundoNumero; //variable que tiene una operacion. resta los 2 numeros del formulario
                            $multiplicacion = $primerNumero * $segundoNumero; //variable que tiene una operacion. Multiplica los 2 numeros del formulario
                            if ($segundoNumero > 0) {
                                $division = $primerNumero / $segundoNumero;
                            }
                            ?>
                            <div id="cont">
                                <?php
                                //Mostramos los datos por pantalla        
                                echo "SUMA -> " . $primerNumero . " + " . $segundoNumero . " = " . $suma . "<br>";
                                echo "RESTA -> " . $primerNumero . " - " . $segundoNumero . " = " . $resta . "<br>";
                                echo "MULTIPLICACIÓN -> " . $primerNumero . " * " . $segundoNumero . " = " . $multiplicacion . "<br>";
                                //En caso de que el segundo numero sea menor o igual a 0
                                if ($segundoNumero <= 0) {
                                    echo "No se puede dividir por 0<br>";
                                } else {
                                    echo "DIVISIÓN -> " . $primerNumero . " / " . $segundoNumero . " = " . $division . "<br>";
                                }
                            } else {//Código que se ejecuta antes de rellenar el formulario  
                                ?>
                            </div>
                            <form name="form21" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                <legend>Operaciones con numeros ENTEROS | Operar sobre el MISMO php</legend>
                                <div>
                                    <label for="exampleNumero1">Primer Número: </label>
                                    <input type="number" name="primerNumero" placeholder=" Introduzca un número">                
                                </div>
                                <div>
                                    <label for="exampleNumero1">Segundo Número: </label>
                                    <input type="number" name="segundoNumero" placeholder=" Introduzca un número">                
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
