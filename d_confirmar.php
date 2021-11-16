<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Confirmar.</a>
        <a href="d_datos_recibidas.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Confirmar.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="d_datos_recibidas.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content center">
                    <span class="card-title"><strong>Confirmar</strong></span>

                    <br>

                    <?php 
                        $idIntercambio = $_GET['idIntercambio'];
                        $idUsuario = $_GET['idUsuario'];
                    ?>

                    <form action="procesos/aceptar_proceso.php" method="get">
                        <div class="input-field col s12 m12 l6">
                            <input id="regalo" name="regalo" type="text" class="validate">
                            <label for="regalo">Regalo</label>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <input id="idIntercambio" name="idIntercambio" type="text" value="<?php echo $idIntercambio; ?>">
                            <label for="idIntercambio">Id intercambio</label>
                        </div>

                        <div class="input-field col s6 m6 l6">
                            <input id="idUsuario" name="idUsuario" type="text" value="<?php echo $idUsuario; ?>">
                            <label for="idUsuario">Regalo</label>
                        </div>

                        <div class="col s12 m12 l12 center">
                            <button type="submit" class="waves-effect waves-light btn-large red_ours_color"><i class="material-icons left">done</i>Aceptar</button>
                        </div>
                    </form>

                    <br>
                    <img src="images/confirmar.png" width="250px">

                </div>
            </div>
        </div>
    </div>

</body>
<?php include('1_js.php'); ?>
</html>