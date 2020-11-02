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
                        <h3>Ejercicio 01</h3>
                    </header>
                    <div>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 19/03/2020

                          @description: 1.- Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y 
                        mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).
                         */
                        $string = "Contenido de string";
                        $int = 2;
                        $float = 2.567;
                        $bool = true;

                        //muestra el contenido de las variables

                        echo 'La variable $string contiene un dato de tipo ' . gettype($string); //gettype obtiene el tipo de una variable
                        echo '<br>';
                        echo 'La variable $int contiene un dato de tipo ' . gettype($int); //gettype obtiene el tipo de una variable
                        echo '<br>';
                        echo 'La variable $float contiene un dato de tipo ' . gettype($float); //gettype obtiene el tipo de una variable
                        echo '<br>';
                        echo 'La variable $bool contiene un dato de tipo ' . gettype($bool); //gettype obtiene el tipo de una variable
                        echo '<br>';
                        ?>
                        <h1>Distintos tipos de variables mostrados con echo</h1> <!--Muestra una o más cadenas -- No necesitas parentesis al no ser una función-->
                        <p><strong>String</strong>-><?php echo $string ?></p>
                        <p><strong>Int</strong>-><?php echo $int ?></p>
                        <p><strong>Float</strong>-><?php echo $float ?></p>
                        <p><strong>Bool</strong>-><?php echo $bool ?></p>

                        <h1>Distintos tipos de variables mostrados con print</h1> <!--Muestra una cadenas -- No necesitas parentesis al no ser una función-->
                        <p><strong>String</strong>-><?php print $string ?></p>
                        <p><strong>Int</strong>-><?php print $int ?></p>
                        <p><strong>Float</strong>-><?php print $float ?></p>
                        <p><strong>Bool</strong>-><?php print $bool ?></p>

                        <h1>Distintos tipos de variables mostrados con printf()</h1> <!--Imprimir una cadena con formato -- Devuelve la longitud de la cadena impresa-->
                        <p><strong>String</strong>-><?php printf($string) ?></p>
                        <p><strong>Int</strong>-><?php printf($int) ?></p>
                        <p><strong>Float</strong>-><?php printf($float) ?></p>
                        <p><strong>Bool</strong>-><?php printf($bool) ?></p>

                        <h1>Distintos tipos de variables mostrados con print_r()</h1> <!-- Imprime información legible para humanos sobre una variable-->
                        <p><strong>String</strong>-><?php print_r($string) ?></p>
                        <p><strong>Int</strong>-><?php print_r($int) ?></p>
                        <p><strong>Float</strong>-><?php print_r($float) ?></p>
                        <p><strong>Bool</strong>-><?php print_r($bool) ?></p>

                        <h1>Distintos tipos de variables mostrados con var_dump()</h1> <!--Muestra información sobre una variable -- No devuelve ningún valor.-->
                        <p><strong>String</strong>-><?php var_dump($string) ?></p>
                        <p><strong>Int</strong>-><?php var_dump($int) ?></p>
                        <p><strong>Float</strong>-><?php var_dump($float) ?></p>
                        <p><strong>Bool</strong>-><?php var_dump($bool) ?></p>
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
