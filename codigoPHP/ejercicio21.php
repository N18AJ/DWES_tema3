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
                margin-left: 40%;
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
                        <h3>Ejercicio 21</h3>
                    </header>
                    <div>
                        <!--
                          @author: Nerea Álvarez Justel
                          @since: 23/03/2020

                          @description: 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php
                        para que muestrelas preguntas y las respuestas recogidas.
                        -->
                        <form name="form21" action="Tratamiento.php" method="POST">
                            <legend><h1>Operaciones con numeros ENTEROS</h1></legend>
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
