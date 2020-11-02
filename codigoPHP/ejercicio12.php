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
            #cont{
                margin-top: 10px;
                font-family: 'Caveat';
                font-size: 13pt;
            }
            #cont h3{
                margin-bottom: 0px;
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
                        <h3>Ejercicio 12</h3>
                    </header>
                    <div id="cont">
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 26/03/2020

                          @description: 12.- Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
                         */
                        echo '<h1>Variables con Print_r</h1>';
                        echo '<h3>Variable Server</h3>';
                        echo "<pre>";
                        print_r($_SERVER) . '<br>';
                        echo "</pre>";
                        echo '<h3>Variable Env</h3>';
                        print_r($_ENV) . '<br>';
                        echo '<h3>Variable Files</h3>';
                        print_r($_FILES) . '<br>';
                        echo '<h3>Variable Get</h3>';
                        print_r($_GET) . '<br>';
                        echo '<h3>Variable Post</h3>';
                        print_r($$_REQUEST) . '<br>';
                        echo '<h3>Variable Request</h3>';
                        print_r($_REQUEST) . '<br>';
                        echo '<h3>Variable Session</h3>';
                        print_r($_SESSION);

                        echo '<h1>Variables con foreach</h1>';
                        echo '<h3>Variable Server</h3>';
                        foreach ($_SERVER as $key => $value) {
                            echo "<b>[$key]</b> -> $value <br>";
                        }
                        echo '<h3>Variable Cookie</h3>';
                        foreach ($_COOKIE as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Env</h3>';
                        foreach ($_ENV as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Files</h3>';
                        foreach ($_FILES as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Get</h3>';
                        foreach ($_GET as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Post</h3>';
                        foreach ($$_REQUEST as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Request</h3>';
                        foreach ($_REQUEST as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
                        }
                        echo '<h3>Variable Session</h3>';
                        foreach ($_SESSION as $key => $value) {
                            echo "<pre>";
                            echo "[$key] => $value" . '<br>';
                            echo "</pre>";
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
