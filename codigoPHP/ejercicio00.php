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
           table{
                color: black;
            }
                    /*ICONOS*/   
            .icono_link{
                background-color: #2a2f4a;
            }
            .icono_logo{
                background-color: #2a2f4a;
            }
            .icono_git{
                background-color: #2a2f4a;
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
                        <h3>Ejercicio 00</h3>
                    </header>
                    <div id="cont">
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 19/03/2020

                          @description: 0. - Hola Mundo - Info.
                         */ echo 'Hola Mundo!';
                            phpinfo();
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
