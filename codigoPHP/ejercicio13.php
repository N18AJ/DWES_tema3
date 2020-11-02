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
                        <h3>Ejercicio 13</h3>
                    </header>
                    <div>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 19/03/2020

                          @description: 13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
                         */
                        $archivo = "contador.txt";
                        $ruta = "../tmp/";
                        $archivoRutaCompleta = $ruta . $archivo;
                        if (file_exists($ruta)) {//Si existe la carpeta	
                            if (file_exists($archivoRutaCompleta)) {//Si existe el archivo
                                $f = fopen($archivoRutaCompleta, "r"); //abrimos el archivo en modo de lectura
                                if ($f) {
                                    $contador = fread($f, filesize($archivoRutaCompleta)); //leemos el archivo
                                    $contador++; //sumamos +1 al contador
                                    fclose($f);
                                }
                                //abrimos el archivo en modo de escritura
                                //La opción w+ sobreescribe el fichero
                                $f = fopen($archivoRutaCompleta, "w+");
                                if ($f) {
                                    fwrite($f, $contador); //Escribimos en el fichero lo que contenga $contador
                                    fclose($f); //Cerramos el fichero
                                }
                                echo "<h2>Nº de visitas: " . $contador . "</h2>";
                            } else {//Si no existe el fichero...
                                echo "No existe el fichero " . $archivo . "<br><br>";
                                echo "Se creará el fichero en la siguiente ruta " . $ruta . "<br><br>";
                                //Al abrir en modo w+ si no existe el fichero lo crea
                                //El contenido anterior del fichero se borrará
                                $f = fopen($archivoRutaCompleta, "w+");
                                if ($f) {
                                    fwrite($f, 0);
                                    fclose($f);
                                }
                                echo "El contador se ha inicializado a 0<br><br>";
                                echo "Archivo creado. Recarga la página";
                            }
                        } else {//Si no existe la carpeta...
                            echo "No existe el directorio 'tmp/' . Se creará ahora...<br><br><br>";
                            if (mkdir($ruta, 0777)) {//Creamos la carpeta con el comando mkdir. Le pasamos la ruta, los permisos y
                                echo "Directorio creado. Recarga la página";
                            }
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
