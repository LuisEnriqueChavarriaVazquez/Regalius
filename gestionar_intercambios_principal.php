<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar intercambios.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Gestión de intercambios.</a>
        <a href="index.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Intercambios.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <div class="title_all">
        <p class="black-text">Listado.</p>
    </div>

    <section class="containerGeneral cream_ours_color_dark">
        <div class="containerCardsContador row">
            <?php
                require_once('procesos/mostrarIntercambios.php');
            ?>
        </div>
    </section>

    <div class="fixed-action-btn">
        <a href="c_agregar_intercambios_form.php" class="btn-floating btn-large waves-effect waves-light bistre_ours_color">
            <i class="large material-icons">add</i>
        </a>
    </div>

</body>
<?php include '1_js.php'; ?>
</html>