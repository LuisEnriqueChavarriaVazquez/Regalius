<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar amigos</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Agregar amigos.</a>
        <a href="gestionar_amigos_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Agregar amigos.</p>
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
                    <span class="card-title"><strong>Agregar amigos</strong></span>

                    <br>
                    <form action="procesos/agregarAmigos.php" method="post">
                        <div class="input-field col s12 m12 l6">
                            <input id="emailAmigo" name="emailAmigo" type="email" class="validate">
                            <label for="emailAmigo">Correo electrónico.</label>
                        </div>
                        
                        <div class="input-field col s12 m12 l6">
                            <input id="nombreAmigo" name="nombreAmigo" type="text" class="validate">
                            <label for="nombreAmigo">Nombre</label>
                        </div>
                        
                        <div class="col s12 m12 l12 center">
                            <input name="agregar" class="waves-effect waves-light white-text btn-large cream_ours_color" type="submit" value="Agregar">
                        </div>
                    </form>
                        
                    <br>
                    <img src="images/agregarAmigos.png" width="250px">

                </div>
            </div>
        </div>
    </div>

</body>
<?php include('1_js.php'); ?>
</html>