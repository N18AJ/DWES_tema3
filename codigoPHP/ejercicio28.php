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
                        <h3>Ejercicio 25</h3>
                    </header>
                    <div>
                        <?php 
                        /*
                        @author: Nerea Álvarez Justel
                        @since: 19/10/2020
                        
                        @description: 28. Cuestionario de satisfación
                        */
				
                        require '../core/201020libreriaValidacion.php'; //importamos la libreria de validacion
                        //
                        //constantes que contienen datos que necesitan las funciones de la libreria de validacion
                        $entradaOK = true; //Inicializamos una variable que nos ayudara a controlar si todo esta correcto
        
                        //Inicializamos un array que se encargara de recoger los errores(Campos vacios)
                        $aErrores = [
                            'campoAlfabetico' => null,
                            'campoAlfabeticoOpcional' => null,

                            'campoEntero' => null,  
                            'campoEnteroOpcional' => null, 

                            'campoTexto' => null,
                            'campoTextoOpcional' => null,

                            'selectorRadio' => null,
                            'selectorRadioOpcional' => null,

                            'selectorFecha' => null,
                            'selectorFechaOpcional' => null,

                            'lista' => null,

                        ];

                        //Inicializamos un array que se encargara de recoger los datos del formulario(Campos vacios)
                        $aFormulario = [
                            'campoAlfabetico' => null,
                            'campoAlfabeticoOpcional' => null,

                            'campoEntero' => null,  
                            'campoEnteroOpcional' => null,  

                            'campoTexto' => null,
                            'campoTextoOpcional' => null,

                            'selectorRadio' => null,
                            'selectorRadioOpcional' => null,

                            'selectorFecha' => null,
                            'selectorFechaOpcional' => null,

                            'lista' => null,
                        ];

                        if (isset($_POST['enviar']) && $_POST['enviar'] == 'Conclusion') { //Si se ha pulsado enviar
                            //La posición del array de errores recibe el mensaje de error si hubiera
                        #OBLIGATORIOS
                            $aErrores['campoAlfabetico'] = validacionFormularios::comprobarAlfabetico($_POST['campoAlfabetico'], 255, 1, 1);  //maximo, mínimo y opcionalidad
                            $aErrores['campoEntero'] = validacionFormularios::comprobarEntero($_POST['campoEntero'], 10, 1, 1); //maximo, mínimo y opcionalidad
                            if(!isset($_POST['selectorRadio'])){$aErrores['selectorRadio'] = "Debe marcarse un valor";} //Condición de 1 valor en el RADIO
                            $aErrores['selectorFecha'] = validacionFormularios::validarFecha($_POST['selectorFecha'], "2999-12-12", "1900-01-01", 1); //maximo, minimo y obligatoriedad
                            $aErrores['campoTexto'] = validacionFormularios::comprobarAlfaNumerico($_POST['campoTexto'], 255, 1, 1); //maximo, mínimo y opcionalidad
                            $aErrores['lista'] = validacionFormularios::validarElementoEnLista($_POST['lista'], array("Ni idea", "Con la familia", "De fiesta","Trabajando","Estudiando DWES")); //Indicaremos las opciones, se enlazaran con lo mostrado en Interface

                            foreach ($aErrores as $campo => $error) { //Recorre el array en busca de mensajes de error
                                if ($error != null) { //Si lo encuentra vacia el campo y cambia la condiccion
                                    $entradaOK = false; //Cambia la condiccion de la variable
                                }
                                else{
                                    if(isset($_POST[$campo])){
                                        $aFormulario[$campo] = $_POST[$campo];
                                    }
                                } 
                            }
                        } else {
                            $entradaOK = false; //Cambiamos el valor de la variable porque no se ha pulsado el botón
                        }

                        if ($entradaOK) { //Si el valor es true procesamos los datos que hemos recogido
                          /*  foreach ($aFormulario as $campo) { //Recorre el array en busca de mensajes de error
                                    $aFormulario[$campo] = $_POST[$campo];
                            } */
                           
                            //Idioma utilizado
                            setlocale(LC_ALL, "es_ES.utf-8");
                            //Localización de franja horaria
                            date_default_timezone_set("Europe/Madrid");
                            //Muestra de la fecha en el mismo momento
                            echo strftime("<p>Hoy %A %d de %B de %G a las %H:%M</p>");
                                    //Fechas para operar
                                        $fechaInicial = date(($aFormulario['selectorFecha']));
                            $fechaActual = date('Y');
                                        //Resta de fechas 
                                        $diff = abs(strtotime($fechaActual) - strtotime($fechaInicial));
                            $years = floor($diff / (365*60*60*24));//Sacamos AÑOS
                            //
                            //Mostramos los datos por pantalla
                            echo "Don/Dña " . $aFormulario['campoAlfabetico'] . " nacid@ hace " . $years . " años" . "<br>";
                            echo "Se siente " . $aFormulario['selectorRadio'] . "<br>";
                            echo "Valore su curso actual con un " . $aFormulario['campoEntero'] . " de 10" . "<br>";
                            echo "Estas Navidades las dedicaré a " . $aFormulario['lista'] . "<br>";
                            echo "Y además opina que " . $aFormulario['campoTexto'] . "<br>";
                            
                        } else { //Mostrar el formulario hasta que se rellene correctamente
                            ?>
                        <h1>Nerea Álvarez Justel</h1>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <fieldset>
                                    <legend>Encuesta de Satisfacción Personal :)</legend>
                                    <div class="obligatorio">
                                        Nombre y apellidos: 
                                        <input type="text" name="campoAlfabetico" placeholder="Nombre y apellidos" value="<?php if($aErrores['campoAlfabetico'] == NULL && isset($_POST['campoAlfabetico'])){ echo $_POST['campoAlfabetico'];} ?>"><br> <!-- Mientras el valor sea correcto de mantiene si no -->
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                            <?php if ($aErrores['campoAlfabetico'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['campoAlfabetico']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                
                                    </div>

                                    <br/>

                                    <div class="obligatorio">
                                        Fecha de nacimiento: 
                                        <input type="date" name="selectorFecha" value="<?php if($aErrores['selectorFecha'] == NULL && isset($_POST['selectorFecha'])){ echo $_POST['selectorFecha'];} ?>"><br> <!-- Mientras el valor sea correcto de mantiene si no -->
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                            <?php if ($aErrores['selectorFecha'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['selectorFecha']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                
                                    </div>

                                    <br/>

                                    <div class="obligatorio">
                                        ¿Cómo te sientes hoy? 
                                        <br/>
                                        <input type="radio" id="RO1" name="selectorRadio" value="Muy Mal" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Muy Mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO1">Muy Mal</label><br/>
                                        <input type="radio" id="RO2" name="selectorRadio" value="Mal" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Mal"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO2">Mal</label><br/>
                                        <input type="radio" id="RO3" name="selectorRadio" value="Regular" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Regular"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO3">Regular</label><br/>
                                         <input type="radio" id="RO3" name="selectorRadio" value="Bien" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO3">Bien</label><br/>
                                        <input type="radio" id="RO3" name="selectorRadio" value="Muy Bien" <?php if(isset($_POST['selectorRadio']) && $_POST['selectorRadio'] == "Muy Bien"){ echo 'checked';} ?>> <!--//Recuerda la selección-->
                                            <label for="RO3">Muy Bien</label><br/>
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                                <?php if ($aErrores['selectorRadio'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['selectorRadio']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                
                                    </div>

                                    <br/>

                                    <div class="obligatorio">
                                        ¿Cómo va el curso? (1 - 10)
                                        <input type="number" name="campoEntero" placeholder="Calificación" value="<?php if($aErrores['campoEntero'] == NULL && isset($_POST['campoEntero'])){ echo $_POST['campoEntero'];} ?>"><br> <!-- Mientras el valor sea correcto de mantiene si no -->
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                            <?php if ($aErrores['campoEntero'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['campoEntero']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                
                                    </div>

                                    <br/>

                                    <div class="obligatorio">
                                        ¿Cómo se presentan las vacaciones de Navidad?
                                        <select name="lista">
                                            <!-- Opciones que tiene la lista en su interior -->
                                            <option value="Ni idea" <?php if(isset($_POST['lista'])){if($aErrores['lista'] == NULL && $_POST['lista'] == "opcion1"){ echo "selected";}} ?>>Ni idea</option>
                                            <option value="Con la familia" <?php if(isset($_POST['lista'])){if($aErrores['lista'] == NULL && $_POST['lista'] == "opcion2"){ echo "selected";}} ?>>Con la familia</option>
                                            <option value="De fiesta" <?php if(isset($_POST['lista'])){if($aErrores['lista'] == NULL && $_POST['lista'] == "opcion3"){ echo "selected";}} ?>>De fiesta</option>
                                            <option value="Trabajando" <?php if(isset($_POST['lista'])){if($aErrores['lista'] == NULL && $_POST['lista'] == "opcion4"){ echo "selected";}} ?>>Trabajando</option>
                                            <option value="Estudiando DWES" <?php if(isset($_POST['lista'])){if($aErrores['lista'] == NULL && $_POST['lista'] == "opcion5"){ echo "selected";}} ?>>Estudiando DWES</option>
                                        </select>
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                        <?php if ($aErrores['lista'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['lista']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                             
                                    </div>

                                    <br/>
                                    <div class="obligatorio">
                                        Describe brevemente tu estado de ánimo: <br>
                                        <textarea name="campoTexto"><?php if($aErrores['campoTexto'] == NULL && isset($_POST['campoTexto'])){ echo trim($_POST['campoTexto']);}?></textarea><br> <!-- Mientras el valor sea correcto de mantiene si no -->
                                        <!--  Si no es correcto Borra y mostramos el mensaje de error -->
                                            <?php if ($aErrores['campoTexto'] != NULL) { ?>
                                        <div class="error">
                                            <?php echo $aErrores['campoTexto']; //Mensaje de error que tiene el array aErrores   ?>
                                        </div>   
                                    <?php } ?>                
                                    </div>

                                    <div>
                                        <input type="submit" name="enviar" value="Conclusion">
                                    </div>
                                </fieldset>
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
