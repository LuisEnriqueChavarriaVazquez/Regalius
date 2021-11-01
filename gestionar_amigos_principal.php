<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar amigos.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Gestión de amigos.</a>
        <a href="index.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Amigos.</p>
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
            <div class="col s12 m6 l6">
                <div class="card cultured_ours_color z-depth-2" style="border-radius:10px;">
                    <div class="card-content white-text" style="padding: 5px 20px 0px 30px;">
                        <span class="card-title black-text" style="font-weight:600;">AmigoX</span>
                    </div>
                    <div class="card-action" style="padding: 10px; border-radius: 10px;">
                        <a href="a_editar_amigos_form.php" class="waves-effect waves-green btn-flat green-text text-darken-4 indigo lighten-5"><i class="material-icons left">edit</i>Editar</a>
                        <a class="waves-effect waves-red btn-flat red-text text-darken-4 indigo lighten-5"><i class="material-icons left">close</i>Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="card cultured_ours_color z-depth-2" style="border-radius:10px;">
                    <div class="card-content white-text" style="padding: 5px 20px 0px 30px;">
                        <span class="card-title black-text" style="font-weight:600;">AmigoX</span>
                    </div>
                    <div class="card-action" style="padding: 10px; border-radius: 10px;">
                        <a href="a_editar_amigos_form.php" class="waves-effect waves-green btn-flat green-text text-darken-4 indigo lighten-5"><i class="material-icons left">edit</i>Editar</a>
                        <a class="waves-effect waves-red btn-flat red-text text-darken-4 indigo lighten-5"><i class="material-icons left">close</i>Eliminar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l6">
                <div class="card cultured_ours_color z-depth-2" style="border-radius:10px;">
                    <div class="card-content white-text" style="padding: 5px 20px 0px 30px;">
                        <span class="card-title black-text" style="font-weight:600;">AmigoX</span>
                    </div>
                    <div class="card-action" style="padding: 10px; border-radius: 10px;">
                        <a href="a_editar_amigos_form.php" class="waves-effect waves-green btn-flat green-text text-darken-4 indigo lighten-5"><i class="material-icons left">edit</i>Editar</a>
                        <a class="waves-effect waves-red btn-flat red-text text-darken-4 indigo lighten-5"><i class="material-icons left">close</i>Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed-action-btn">
        <a href="a_agregar_amigos_form.php" class="btn-floating btn-large waves-effect waves-light bistre_ours_color">
            <i class="large material-icons">add</i>
        </a>
    </div>

</body>
<?php include '1_js.php'; ?>
</html>