<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuraciones</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Configuraciones.</a>
        <a href="index.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Configuraciones.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content center">
                    <span class="card-title"><strong>Configuraciones</strong></span>

                    <br>

                    
                    <ul class="collapsible">
                        <li>
                        <div class="collapsible-header"><i class="material-icons">color_lens</i>Ajustes de visión.</div>
                        <div class="collapsible-body white">
                            <span>
                            
                            <a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" class="waves-effect btn red_ours_color" style="width: 100%; padding-bottom: 10px; margin-bottom: 10px;" id="a_styles"><i class="material-icons">palette</i>Normal</a>
                            <br>
                            <a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" class="waves-effect btn red_ours_color" style="width: 100%; padding-bottom: 10px; margin-bottom: 10px;" id="a_deuteranopia"><i class="material-icons">palette</i>Deuteranopia</a>
                            <br>
                            <a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" class="waves-effect btn red_ours_color" style="width: 100%; padding-bottom: 10px; margin-bottom: 10px;" id="a_protanopia"><i class="material-icons">palette</i>Protanopia</a>
                            <br>
                            <a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" class="waves-effect btn red_ours_color" style="width: 100%; padding-bottom: 10px; margin-bottom: 10px;" id="a_tritanopia"><i class="material-icons">palette</i>Tritanopia</a>

                            </span>
                        </div>
                        </li>
                        <li>
                        <div class="collapsible-header"><i class="material-icons">chat_bubble</i>Ajustes de idioma</div>
                        <div class="collapsible-body white"><span>Próximamente... traeremos más idiomas.</span></div>
                        </li>
                    </ul>
        

                    <br>
                    <img src="images/configuracion.png" width="250px">

                </div>
            </div>
        </div>
    </div>


</body>
<?php include('1_js.php'); ?>
</html>