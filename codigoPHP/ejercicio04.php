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
                        <h3>Ejercicio 04</h3>
                    </header>
                    <div>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 26/03/2020

                          @description: 4.- Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.
                         */
                        //sudo apt-get install language-pack-pt 
                        //Aplicaremos el luenguaje al servidor - La terminacion pt indica POETUGUES
                        date_default_timezone_set("Europe/Lisboa"); //Ajustamos la zona horaria portuguesa
            
                        setlocale(LC_ALL, 'pt_PT..UTF-8');//Seleccionamos el idioma

                        echo "La hora  en España es ";//Damos formato al resultado

                        echo strftime ("%T y la fecha %A %e %B del %Y"),"<br>"; //strftime es una función que formatea la fecha y hora
                                        //%T hora cmpleta
                                        //%A día de la semana
                                        //%e día de la semana en número
                                        //%B mes del año
                                        //%Y Año en número
                        // Fecha
                        echo "Fecha en otro formato: ",date("d"),":",date("m"),":",date("Y"),"<br>";
                                       //d día de la semana en número
                                                    //m mes del año en número
                                                                   //Y año en número

                        // Horario de 24 horas sin ceros, de 0 a 23
                        echo "Hora en formato digital:  ",date("H"),":",date("i"),":",date("s");
                                        //H hora
                                                    //minutos
                                                                    //segundos
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
