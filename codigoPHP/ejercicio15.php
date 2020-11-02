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
                margin-top: 15px;
                font-family: 'Caveat';
                margin-left: 40%;
            }
            h4{
                font-size: 1.7em;
            }
            p{
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
                        <h3>Ejercicio 15</h3>
                    </header>
                    <div id="cont">
                        <h4>Salario semanal</h4>
                        <?php
                        /*
                          @author: Nerea Álvarez Justel
                          @since: 26/03/2020

                          @description: 15.- Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana.
			(Array asociativo con los nombres de los días de la semana).
                         */
                        
                        $salario = 0;
                        $arraySueldo = [// Array con los días de la semana y el sueldo
                            "Lunes" => 40,
                            "Martes" => 20,
                            "Miercoles" => 70,
                            "Jueves" => 40,
                            "Viernes" => 30,
                            "Sabsdo" => 50,
                            "Domingo" => 60
                        ];

                        foreach ($arraySueldo as $dia => $sueldoDiario) { //bucle que recorre el array
                            echo 'El ' . $dia . ' ha cobrado ' . $sueldoDiario . ' €' . "<br>"; //mensaje de salida
                            $salario += $sueldoDiario; //operacion
                            echo "<br>";
                        }

                        echo "<p>Salario total: " . $salario . " €</p>"; //resultado de la suma de los datos del array
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
