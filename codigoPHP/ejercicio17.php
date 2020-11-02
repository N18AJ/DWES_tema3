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
            <a href="https://www.linkedin.com/in/nerea-%C3%A1lvarez-justel-a99b0a166/" target="_blank"><img src="../webroot/media/images/link.png" alt="LinkedIn" width="65" class="icono_link"/></a>
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
                        <h3>Ejercicio 17</h3>
                    </header>
                    <div id="cont">
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 19/03/2020

                          @description: 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
                            asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
                            distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
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
                                        echo '<td style="background-color:#ff9980;width:23px;" title="' . $teatro[$fila][$asiento] . '"/>';
                                    } else {//si la fila y el asiento es NULL lo mostramos vac�o
                                        echo '<td style="background-color:#7ad652; width:23px;" title="Vacio"/>';
                                    }
                                }
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "<p>Mostramos los asientos ocupados con FOREACH</p>";
                            foreach ($teatro as $fila => $posicion) { //recorremos el array de las filas con foreach
                                foreach ($posicion as $asiento => $nombre) { //recorremos el array de los asientos con foreach
                                    if ($teatro[$fila][$asiento] != null) { //si la fila y el asiento no son NULL mostramos quien se ha sentado 
                                        echo "Fila: " . $fila . " Asiento: " . $asiento . " Nombre: " . $nombre . "</br>"; //mensaje de salida
                                    }
                                }
                            }
                            echo "<p>Mostramos los asientos ocupados con WHILE</p>";
                            $fila = 1; //damos valor a la variable        
                            while ($fila <= 20) {
                                $asiento = 1; //damos valor a la variable
                                while ($asiento <= 15) {
                                    if ($teatro[$fila][$asiento]) { //si la fila y el asiento contienen algo lo mostramos
                                        echo "Fila: " . $fila . " Asiento: " . $asiento . " Nombre: " . $teatro[$fila][$asiento] . "</br>"; //mensaje de salida
                                    }
                                    $asiento++; //sumamos 1 al asiento
                                }
                                $fila++; //sumamos 1 a la fila
                            }
                            echo "<p>Mostramos los asientos ocupados con FOR</p>";
                            for ($fila = 1; $fila <= 20; $fila++) { //recorremos las filas con for
                                for ($asiento = 1; $asiento <= 15; $asiento++) { //recorremos los asientos con for
                                    if ($teatro[$fila][$asiento]) { //si la fila y el asiento contienen algo lo mostramos
                                        echo "Fila: " . $fila . " Asiento: " . $asiento . " Nombre: " . $teatro[$fila][$asiento] . "<br>"; //mensaje de salida
                                    }
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