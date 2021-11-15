<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitaciones recibidas.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Invitaciones recibidas.</a>
        <a href="index.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Invitaciones.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <div class="title_all">
        <p class="black-text">Recibidas.</p>
    </div>

    <section class="containerGeneral cream_ours_color_dark">
        <div class="containerCardsContador row">
            <?php require_once('procesos/mostrarInvitaciones.php'); ?>
        </div>
    </section>


</body>
<?php include '1_js.php'; ?>
</html>