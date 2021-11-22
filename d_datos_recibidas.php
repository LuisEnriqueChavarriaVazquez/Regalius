<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos invitaciones.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Datos invitaciones.</a>
        <a href="gestionar_invitaciones_recibidas_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Datos invitaciones.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_invitaciones_recibidas_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <?php require_once('procesos/d_mostrar_datos_intercambio.php'); ?>

    <div class="hide-on-med-and-up">
        <br><br><br><br><br><br><br><br>
    </div>
    <section class="buttonsContainer">
        <div>
            <a href="d_confirmar.php?idIntercambio=<?php echo $idIntercambio?>&idUsuario=<?php echo $idUsuario?>" class="waves-effect waves-light btn-large cooper_ours_color_dark"><i class="material-icons left">done</i>Aceptar</a>
        </div>
        <div>
            <a href="procesos/rechazar_proceso.php?idIntercambio=<?php echo $idIntercambio?>&idUsuario=<?php echo $idUsuario?>" class="waves-effect waves-light btn-large cooper_ours_color_dark"><i class="material-icons left">close</i>Rechazar</a>
        </div>
    </section>
    <div class="">
        <br><br><br>
    </div>

    <div class="fixed-action-btn">
        <a href="d_sorteos_resultados.php?idIntercambio=<?php echo $idIntercambio?>&idUsuario=<?php echo $idUsuario?>&temaTitulo=<?php echo $temaTitulo?>&tema1=<?php echo $tema1?>&tema2=<?php echo $tema2?>&tema3=<?php echo $tema3?>&montoMax=<?php echo $montoMax?>&limRegistro=<?php echo $limRegistro?>&limIntercambio=<?php echo $limIntercambio?>&comentario=<?php echo $comentario?>&amigosSeleccionados=<?php echo $amigosSeleccionados?>" class="btn-floating btn-large cooper_ours_color_dark">
            <i class="large material-icons">casino</i>
        </a>
    </div>


</body>
<?php include '1_js.php'; ?>
</html>