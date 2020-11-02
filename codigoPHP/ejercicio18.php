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
                font-size: 14pt;
            }
            p{
                margin-top: 15px;
                font-size: 1.5em;
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
                        <h3>Ejercicio 18</h3>
                    </header>
                    <div id="cont">
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 26/03/2020

                          @description: 18.- Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
                         */
                            //Crear el Array Multidimensional
                           $fila = 1; //damos valor a la variable de las filas
                           $columna = 1; //Variable que utilizaremos para mostrar la coloumna en la que nos encontramos
                           while ($fila <= 20) {
                               $asiento = 1; //damos valor a la variable de los asientos
                               while ($asiento <= 15) { //si se cumple las condicciones del bucle asignamos NULL
                                   $teatro[$fila][$asiento] = null;
                                   $asiento++; //sumamos 1 al asiento
                               }
                               $fila++; //sumamos 1 a la fila
                           }

                            //Asignar valores
                            $teatro[2][5] = "Nerea A";
                            $teatro[5][6] = "Bea";
                            $teatro[5][9] = "Rodri";
                            $teatro[6][3] = "Nerea N";
                            $teatro[20][15] = "Heraclio";

                             // Crear tabla con el gr�fico
                            echo "<table style='position:absolute; right:2%; width:33%; margin-top:-60px'>";
                            echo "<tr>";
                            echo "<td></td>";
                            while ($columna <= 15) {
                                echo "<td style='background-color:#8fc7ff;'>" . $columna . "</td>";
                                $columna++;
                            }
                            echo "</tr>";

                            foreach ($teatro as $fila => $posicion) { //recorremos el array de las filas con foreach
                                echo "<tr style='background-color:#8fc7ff;'>";
                                echo "<td style='width:23px;'>" . $fila . "</td>";
                                foreach ($posicion as $asiento => $nombre) { //recorremos el array de los asientos con foreach
                                    if ($teatro[$fila][$asiento] != null) { //si la fila y el asiento no son NULL mostramos quien se ha sentado 
                                        echo '<td style="background-color:#ff9980;width:23px;"/>';
                                    } else {//si la fila y el asiento es NULL lo mostramos vacío
                                        echo '<td style="background-color:#7ad652; width:23px;"/>';
                                    }
                                }
                                echo "</tr>";
                            }
                            echo "</table>";

                            //@param $teatro es una matriz que consta de filas y asientos
                            function recorreArrayWhile($teatro) {
                                echo "<h3>Mostramos los asientos ocupados con Funciones</h3>";
                                $fila = 1; //damos valor a la variable  
                                $contador = 0;//numero que cuenta el número de asientos ocupados
                                while ($fila <= 20) {
                                    $asiento = 1; //damos valor a la variable
                                    while ($asiento <= 15) {
                                        if ($teatro[$fila][$asiento]) { //si la fila y el asiento contienen algo lo mostramos
                                           $aSalida [$contador] =" Fila: " . $fila . " Asiento: " . $asiento . " -> Nombre: " . $teatro[$fila][$asiento] . "<br>"; //mensaje de salida
                                           $contador++;
                                        }
                                        $asiento++; //sumamos 1 al asiento
                                    }
                                    $fila++; //sumamos 1 a la fila
                                }
                                return $aSalida;
                            }

                            print_r(recorreArrayWhile($teatro));//Llamada a la función
                            echo '</div>';
                           
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
