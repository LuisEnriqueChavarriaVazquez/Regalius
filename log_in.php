<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Log in.</a>
        <a href="2_welcome.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Log in.</p>
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
                    <span class="card-title"><strong>Iniciar sesión</strong></span>

                    <br>

                    <form action="procesos/log_in_proceso.php" method="GET">    
                        <div class="input-field col s12 m12 l6">
                            <input id="nameLogIn" name="nameLogIn" type="text" class="validate">
                            <label for="nameLogIn">Nombre</label>
                        </div>
                        
                        <div class="input-field col s12 m12 l6">
                            <input id="passwordLogIn" name="passwordLogIn" type="password" class="validate">
                            <label for="passwordLogIn">Contraseña</label>
                        </div>

                        <div class="col s12 m12 l12 center">
                            <input name="enter" class="waves-effect waves-light white-text btn-large cream_ours_color" type="submit" value="Ingresar">
                        </div>
                    </form>

                    <h4>&nbsp;</h4>
                    <img src="images/logIn.png" width="250px">

                </div>
            </div>
        </div>
    </div>


</body>
<?php include('1_js.php'); ?>
</html>