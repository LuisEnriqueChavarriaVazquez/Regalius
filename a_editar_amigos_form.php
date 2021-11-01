<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar amigos</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Editar amigos.</a>
        <a href="gestionar_amigos_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Editar amigos.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_amigos_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content center">
                    <span class="card-title"><strong>Editar amigos</strong></span>

                    <br>

                    <div class="input-field col s12 m12 l6">
                        <input id="name" type="text" class="validate">
                        <label for="name">Correo electrónico.</label>
                    </div>

                    <div class="input-field col s12 m12 l6">
                        <input id="password" type="password" class="validate">
                        <label for="password">Nombre</label>
                    </div>

                    <br>
                    <img src="images/editarAmigos.png" width="250px">

                </div>
            </div>
        </div>
    </div>


    <section class="containerGeneralWelcome cream_ours_color_dark row">
            <div class="col s12 m12 l12 center">
                <a href="gestionar_amigos_principal.php" class="waves-effect waves-light btn-large red_ours_color"><i class="material-icons left">done</i>Editar</a>
            </div>
    </section>


</body>
<?php include('1_js.php'); ?>
</html>