<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Regalius.</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Inicio.</p>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/menu.jpg" width="100%">
                </div>
                <br><br><br>
            </div>
        </li>
        <li><a href="log_in.php"><i class="material-icons">person</i>Iniciar sesión.</a></li>
        <li><a href="sign_up.php"><i class="material-icons">fiber_news</i>Registrarse.</a></li>
    </ul>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cooper_ours_color_dark">
                <div class="card-content white-text center">
                    <span class="card-title"><strong>Bienvenido</strong></span>
                    <br>
                    <br>
                    <img src="images/intro.png" width="350px">
                </div>
            </div>
        </div>
    </div>


    <section class="containerGeneralWelcome cream_ours_color_dark row">
            <div class="col s12 m12 l12 center">
                <a href="log_in.php" class="waves-effect waves-light btn-large red_ours_color"><i class="material-icons left">person</i>Iniciar sesión.</a>
            </div>
            <div>
                <br>
            </div>
            <div class="col s12 m12 l12 center">
                <a href="sign_up.php" class="waves-effect waves-light btn-large red_ours_color"><i class="material-icons left">fiber_news</i>Registrarse</a>
            </div>
    </section>

    <div class="fixed-action-btn">
        <a href="intro.php" class="btn-floating btn-large waves-effect waves-light bistre_ours_color">
            <i class="large material-icons">help</i>
        </a>
    </div>


</body>
<?php include('1_js.php'); ?>
</html>