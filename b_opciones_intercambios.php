<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones intercambio.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Opciones intercambio.</a>
        <a href="gestionar_intercambios_en_curso_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Opciones intercambio.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_intercambios_en_curso_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <div class="title_all">
        <p class="black-text">Opciones.</p>
    </div>

    <section class="containerGeneral cream_ours_color_dark">
        <div class="containerCardsContador row">
            
        <div class="col s12 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="images/opt1.jpg">
                    <span class="card-title">Datos del intercambio</span>
                </div>
                <div class="card-content">
                    <p>Revisa toda la informacion sobre el intercambio seleccionado.</p>
                </div>
                <div class="card-action">
                    <a class="black-text" href="b_a_datos_intercambio.php">Ver datos</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6">
            <div class="card">
                <div class="card-image">
                    <img src="images/opt2.jpg">
                    <span class="card-title">Estado amigos</span>
                </div>
                <div class="card-content">
                    <p>Revisa el estado de los amigos invitados al intercambio.</p>
                </div>
                <div class="card-action">
                    <a class="black-text" href="b_a_datos_amigos.php">Ver estado</a>
                </div>
            </div>
        </div>

        </div>
    </section>


</body>
<?php include '1_js.php'; ?>
</html>