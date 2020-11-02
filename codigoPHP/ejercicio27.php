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
            fieldset{
                display: inline-block; 
                width:32%; 
                border: 3px solid white; 
                padding: 25px; 
                border-style: dotted;
            }
            div{
                margin-top: 10px;
                font-family: 'Caveat';
            }
            input{
                height: 20px;
                text-align: center;
            }
            #enviar{
                width: 75px;
                height: 30px;
                margin-left: 45%
            }
             .obligatorio input{
                background-color: #EBE8E7;
            }
            .obligatorio textarea{
                background-color: #EBE8E7;
            }
            .error{
                color: #ff708c;
                font-size: medium;
                font-weight: bolder;
                font-family: 'Arial';
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
                        <h3>Ejercicio 27</h3>
                    </header>
                    <div>
                        <?php 
                        /*
                        @author: Nerea Álvarez Justel
                        @since: 19/10/2020
                        
                        @description: 27.Cuestionario para 3 personas
                        */
				
                        require '../core/201020libreriaValidacion.php'; //importamos la libreria de validacion
                        //constantes que contienen datos que necesitan las funciones de la libreria de validacion

                       define('obligatorio', 1); //Si el valor de obligatorio es 1 el campo es obligatorio

                        //Declaración de variables
                        $entradaOK = true;

                        //Recoge los datos y respuestas del formulario y los declaramos a null
                        for($persona = 1; $persona <=3; $persona++){
                            $aErrores[$persona]['nombre'] = null;
                            $aErrores[$persona]['fecha'] = null;
                            $aErrores[$persona]['opcionSiNo'] = null;
                            $aErrores[$persona]['movil'] = null;
                            
                            $aFormulario[$persona]['nombre'] = null;
                            $aFormulario[$persona]['fecha'] = null;
                            $aFormulario[$persona]['opcionSiNo'] = null;
                            $aFormulario[$persona]['movil'] = null;
                        }
                        
                        if (isset($_POST['submit'])) {//Código que se ejecuta cuando se envía el formulario
                            //Se puede utilizar también $_POST
                            foreach ($aErrores as $persona => $numPersona){
                                $aErrores[$persona]['nombre'] = validacionFormularios::comprobarAlfabetico($_POST[$persona]['nombre'], 255, 1, 1); //Máximo, mínimo y opcionalidad
                                $aErrores[$persona]['fecha'] = validacionFormularios::validarFecha($_POST[$persona]['fecha'], "2999-12-12", "1900-01-01", 1); //Máximo, mínimo y opcionalidad
                                if(!isset($_POST[$persona]['opcionSiNo'])){$aErrores[$persona]['opcionSiNo'] = "Sin valor marcado";}
                                $aErrores[$persona]['movil'] = validacionFormularios::validaTelefono($_POST[$persona]['movil'], 9, 1); //Máximo, mínimo y opcionalidad

                            }

                            foreach ($aErrores as $campo) { //recorre el array en busca de mensajes de error
                                    foreach ($campo as $error) {
                                        if ($error != null) {
                                            $entradaOK = false; //cambia la condiccion de la variable
                                        }
                                    }
                                }
                        } else {
                            $entradaOK = false;
                        }

                        if ($entradaOK) {
                            foreach($aFormulario as $persona => $numPersona){
                                $aFormulario[$persona]['nombre'] = $_POST[$persona]['nombre'];
                                $aFormulario[$persona]['fecha'] = $_POST[$persona]['fecha'];
                                $aFormulario[$persona]['opcionSiNo'] = $_POST[$persona]['opcionSiNo'];
                                $aFormulario[$persona]['movil'] = $_POST[$persona]['movil'];
                          
                            //Localizamos en españa idioma y zona horaria
                            setlocale(LC_ALL, "es_ES.utf-8");
                            date_default_timezone_set("Europe/Madrid");
                            //Formato de fecha ACTUAL
                            echo strftime("<p>Hoy %A %d de %B de %G a las %H:%M</p>");
                            //EDAD 
                                        $fecha = date(($aFormulario[$persona]['fecha']));
                            $fechaActual = date('Y');
                                //Resta de fechas para AÑOS
                                $resultadoFecha1 = abs(strtotime($fechaActual) - strtotime($fecha));
                            $years = floor($resultadoFecha1 / (365*60*60*24));//Sacamos los años 

                            
                        //Mostramos los datos por pantalla     
                            echo '<h1 style="text-align: center; font-size: 30pt;">Encuesta a 3 participante</h1><br>';
                            echo '<h2>Nombre del encuestado: '.$aFormulario[$persona]['nombre'] .'</h2>';
                            echo '<h4>Su fecha de nacimiento es: '.$aFormulario[$persona]['fecha']. " y tienes " . $years . " años" . '</h4>';'</h4>';
                            echo '<h4>El número telefonico es: '.$aFormulario[$persona]['movil'] .'</h4><br>';
                            
                            echo '<h2>La fecha media es: '.($years + $years + $years)/3 .'</h2><br>';
                            echo '<h2>Los resultados de la cuestion son: </h2>';


                                    //OPINION DE LA ENCUESTA
                                $respuestas = ['si' => 0, 'no' => 0];
                                for($persona = 1; $persona <= 3; $persona++){
                                    if($aFormulario[$persona]['opcionSiNo'] == "si"){
                                        $respuestas['si']++;
                                    }
                                    if($aFormulario[$persona]['opcionSiNo'] == "no"){
                                        $respuestas['no']++;
                                    }
                                }

                                if($respuestas['si'] > 0){
                                    if($respuestas['si'] > 1){
                                        echo $respuestas['si'] . " personas que han padecido COVID.<br/>";
                                    }else{
                                        echo "1 personas padecio COVID.<br/>";
                                    }
                                }
                                if($respuestas['no'] > 0){
                                    if($respuestas['no'] > 1){
                                        echo $respuestas['no'] . " personas que no han padecido COVID.<br/>";
                                    }else{
                                        echo "1 personas no padecio COVID.<br/>";
                                    }
                                }
                                echo '<br/><br/>';
                            }
                        } else {//Código que se ejecuta antes de rellenar el formulario
                            ?>
                            <h3>Encuesta de 3 personas</h3>
                            <form name="formulario27" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="text-align: left;">
                            <?php  for($persona = 1; $persona <=3; $persona++){ ?>              
                                <fieldset>
                                    
                                    <legend>Sujeto<?php echo $persona?></legend>
                                    
                                    <label for="N<?php echo $persona?>">Nombre y Apellidos: </label>
                                    <div class="obligatorio">
                                        <input type="text" id="N<?php echo $persona?>" name="<?php echo $persona?>[nombre]" placeholder="Nombre y Apellidos" value="<?php if ($aErrores[$persona]['nombre'] == NULL && isset($_POST[$persona]['nombre'])) {
                                            echo $_POST[$persona]['nombre'];
                                        } ?>"> <!--//Si el valor es bueno, lo escribe en el campo-->
                                        <?php if ($aErrores[$persona]['nombre'] != NULL) { ?>
                                            <div class="error">
                                                <?php echo $aErrores[$persona]['nombre']; //Mensaje de error que tiene el array aErrores   ?>
                                            </div>   
                                        <?php } ?>                
                                    </div>
                                    <br/>	

                                    <label for="N<?php echo $persona?>">Fecha de nacimiento:  </label>				
                                    <div class="obligatorio"> 
                                        <input type="date" id="E<?php echo $persona?>" name="<?php echo $persona?>[fecha]" placeholder="Edad" value="<?php if($aErrores[$persona]['fecha'] == NULL && isset($_POST[$persona]['fecha'])){ 
                                            echo $_POST[$persona]['fecha'];
                                        } ?>"> <!--//Si el valor es bueno, lo escribe en el campo-->
                                        <?php if ($aErrores[$persona]['fecha'] != NULL) { ?>
                                            <div class="error">
                                                <?php echo $aErrores[$persona]['fecha']; //Mensaje de error que tiene el array aErrores   ?>
                                            </div>   
                                        <?php } ?>     
                                    </div>
                                   <br/>

                                   <label>¿Has padecido COVID? </label>
                                   <br/>
                                    <div class="obligatorio">
                                        <input type="radio" id="RO1<?php echo $persona?>1" name="<?php echo $persona?>[opcionSiNo]" value="si" 
                                        <?php 
                                            if(isset($_POST[$persona]['opcionSiNo'] ) && $_POST[$persona]['opcionSiNo']  == "si"){ 
                                                echo 'checked';} 
                                        ?>> <!--//Recuerda la selección-->
                                            <label for="RO1<?php echo $persona?>1">Si</label><br/>
                                        <input type="radio" id="RO1<?php echo $persona?>2" name="<?php echo $persona?>[opcionSiNo]" value="no" 
                                        <?php 
                                            if(isset($_POST[$persona]['opcionSiNo'] ) && $_POST[$persona]['opcionSiNo']  == "no"){
                                                echo 'checked';}
                                         ?>> <!--//Recuerda la selección-->
                                            <label for="RO1<?php echo $persona?>2">No</label><br/>
                                        <?php if ($aErrores[$persona]['opcionSiNo']  != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores[$persona]['opcionSiNo'] ; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                        <?php } ?>                
                                    </div>
                                    <br/>

                                    <label for="N<?php echo $persona?>">Teléfono: </label>
                                    <div class="obligatorio">
                                        <input type="tel" id="N<?php echo $persona?>" name="<?php echo $persona?>[movil]" placeholder="Teléfono" value="<?php if ($aErrores[$persona]['movil'] == NULL && isset($_POST[$persona]['movil'])) {
                                            echo $_POST[$persona]['movil'];
                                        } ?>"> <!--//Si el valor es bueno, lo escribe en el campo-->
                                        <?php if ($aErrores[$persona]['movil'] != NULL) { ?>
                                            <div class="error">
                                                <?php echo $aErrores[$persona]['movil']; //Mensaje de error que tiene el array aErrores   ?>
                                            </div>   
                                        <?php } ?>                
                                    </div>
                                    <br/>
                                    
                                </fieldset>
                                    <?php } ?> 

                            <input id="enviar" type="submit" value="Enviar" name="enviar"> <!--Boton de ENVIAR-->
                        </form>
			<?php } ?>
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
