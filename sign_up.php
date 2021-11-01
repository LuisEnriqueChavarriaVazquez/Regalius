<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Sing up.</a>
        <a href="2_welcome.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Sing up.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="2_welcome.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content center">
                    <span class="card-title"><strong>Crear una cuenta</strong></span>

                    <br>

                    <form action="procesos/sign_up_proceso.php" method="GET">
                        <div class="input-field col s12 m12 l6">
                            <input id="name" name="name" type="text" class="validate">
                            <label for="name">Nombre</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="alias" name="alias" type="text" class="validate">
                            <label for="alias">Alias</label>
                         </div>
                    
                        <div class="input-field col s12 m12 l12">
                            <input id="correo" name="correo" type="email" class="validate">
                            <label for="correo">Correo</label>
                        </div>
                        
                        <div class="input-field col s12 m12 l6">
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        
                        <div class="input-field col s12 m12 l6">
                            <input id="password_reafirmar" name="password_reafirmar" type="password" class="validate">
                            <label for="password_reafirmar">Contraseña</label>
                        </div>
                        
                        <div class="col s12 m12 l12 center">
                            <input name="register" class="waves-effect waves-light white-text btn-large cream_ours_color" type="submit" value="Finalizar">
                        </div>
                    </form>

                         <!--El código es para que mostremos mensajes despues de que validemos en recibir.php-->
                        <?php
                            //En caso de que falten muchos datos.
                            if(!empty($_GET['error'])){
                                if($_GET['error'] == "faltan") {
                                    echo "<div class=\"col s12\">
                                            <div class=\"card-panel red lighten-1\">
                                                <span class=\"white-text\"> Faltan datos en la página.</span>
                                            </div>
                                        </div>";
                                }
                            }
                            //En caso de que falte el nombre
                            if(!empty($_GET['error'])){
                                if($_GET['error'] == "nombre") {
                                    echo "<div class=\"col s12\">
                                            <div class=\"card-panel red lighten-1\">
                                                <span class=\"white-text\"> Falta el nombre.</span>
                                            </div>
                                        </div>";
                                }
                            }

                            //En caso de que falte el apellido
                            if(!empty($_GET['error'])){
                                if($_GET['error'] == "alias") {
                                    echo "<div class=\"col s12\">
                                            <div class=\"card-panel red lighten-1\">
                                                <span class=\"white-text\"> Falta el alias.</span>
                                            </div>
                                        </div>";
                                }
                            }

                            //En caso de que falte la contraseña
                            if(!empty($_GET['error'])){
                                if($_GET['error'] == "contrasena") {
                                    echo "<div class=\"col s12\">
                                            <div class=\"card-panel red lighten-1\">
                                                <span class=\"white-text\"> Falta la contraseña.</span>
                                            </div>
                                        </div>";
                                }
                            }

                            //En caso de que falte el email
                            if(!empty($_GET['error'])){
                                if($_GET['error'] == "email") {
                                    echo "<div class=\"col s12\">
                                            <div class=\"card-panel red lighten-1\">
                                                <span class=\"white-text\"> Falta el email.</span>
                                            </div>
                                        </div>";
                                }
                            }
                        ?>

                        <h4>&nbsp;</h4>
                        <img src="images/signUp.png" class="hide-on-med-and-down" width="25%">
                        <img src="images/signUp.png" class="hide-on-large-only" width="250px">

                </div>
            </div>
        </div>
    </div>



</body>
<?php include('1_js.php'); ?>
</html>