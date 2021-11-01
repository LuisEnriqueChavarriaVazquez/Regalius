<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar intercambios</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Editar intercambio.</a>
        <a href="gestionar_intercambios_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Editar intercambio.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_intercambios_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content">
                    <span class="card-title"><strong>Editar intercambio</strong></span>

                    <br>

                    <div class="input-field col s12">
                        <p class="black-text">Elige a tus amigos</p>
                        <select multiple>
                            <option style="color:#000 !important;" value="" disabled selected></option>
                            <option style="color:#000 !important;" value="1">Amigo 1</option>
                            <option style="color:#000 !important;" value="2">Amigo 2</option>
                            <option style="color:#000 !important;" value="3">Amigo 3</option>
                        </select>
                    </div>

                    <div class="input-field col s12 m4 l4">
                        <input id="tematicaUno" type="text" class="validate">
                        <label for="tematicaUno">Temática uno</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="tematicaDos" type="text" class="validate">
                        <label for="tematicaDos">Temática dos</label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="tematicaTres" type="text" class="validate">
                        <label for="tematicaTres">Temática tres</label>
                    </div>

                    <br>

                    <div class="input-field col s12 m12 l6">
                        <input id="montoMáximo" type="number" class="validate">
                        <label for="montoMáximo">Monto máximo</label>
                    </div>

                    <div class="input-field col s12 m12 l6">
                        <input id="limiteFecha" type="text" class="validate datepicker">
                        <label for="limiteFecha">Fecha límite de registro</label>
                    </div>

                    <div class="input-field col s12 m12 l6">
                        <input id="intercambioFecha" type="text" class="validate datepicker">
                        <label for="intercambioFecha">Fecha de intercambio</label>
                    </div>

                    <div class="input-field col s12 m12 l6">
                        <textarea id="comentarios" class="materialize-textarea" data-length="120"></textarea>
                        <label for="comentarios">Comentarios adicionales.</label>
                    </div>

                    <br>
                    <div style="width: 100%;" class="center">
                        <img src="images/EditarIntercambio.png" width="250px">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="containerGeneralWelcome cream_ours_color_dark row">
            <div class="col s12 m12 l12 center">
                <a href="sign_up.php" class="waves-effect waves-light btn-large red_ours_color"><i class="material-icons left">done</i>Editar</a>
            </div>
    </section>


</body>
<?php include('1_js.php'); ?>
</html>