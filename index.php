<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('1_css.php') ?>

    <title>Principal</title>
</head>
<body class="cream_ours_color">

    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Regalius.</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Cerrar sesión</a></li>
        </ul>
        </div>
    </nav>

    
    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/menu.jpg" width="100%">
                </div>
                    <br>
                    <a href="#name"><span class="white-text name">
                        <?php 
                            session_start();
                            echo "<b>" . $_SESSION['name'] . " // " . $_SESSION['alias'] . "</b>"; 
                        ?>
                    </span></a>
                    <a href="#email"><span class="white-text email"><?php echo $_SESSION['correo']; ?></span></a>
                    <br>
            </div>
        </li>
        <li><a href="gestionar_amigos_principal.php"><i class="material-icons">people</i>Gestionar amigos.</a></li>
        <li><a href="gestionar_intercambios_principal.php"><i class="material-icons">card_giftcard</i>Gestionar intercambios.</a></li>
        <li><a href="gestionar_intercambios_en_curso_principal.php"><i class="material-icons">card_membership</i>Intercambios en curso.</a></li>
        <li><a href="gestionar_invitaciones_recibidas_principal.php"><i class="material-icons">record_voice_over</i>Invitaciones recibidas.</a></li>  
        <li><a href="settings.php"><i class="material-icons">settings</i>Configuraciones.</a></li>
        <li><a href="help.php"><i class="material-icons">help</i>Ayuda.</a></li>
        <li><a href="intro.php"><i class="material-icons">child_care</i>Tutorial.</a></li>
        <li><a href="procesos/cerrarSesion.php"><i class="material-icons">directions_run</i>Cerrar sesión.</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Temas<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                <ul>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_styles">Normal</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_deuteranopia">Deureranopia</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_protanopia">Protanopia</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_tritanopia">Tritanopia</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_oscuro">Oscuro naranja</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_oscuro_verde">Oscuro verde</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_oscuro_azul">Oscuro azul</a></li>
                    <li><a onclick="M.toast({html: 'Tema aplicado.'})" href="#!" id="a_oscuro_rosa">Oscuro rosa</a></li>
                </ul>
                </div>
            </li>
            </ul>
        </li>
    </ul>

    <!--Carousel code-->

    <section class="container_cards cream_ours_color hide-on-med-and-down">
    <div class="title_all">
        <p class="black-text">Opciones principales.</p>
    </div>
        <div class="container_cards_secondary_huge">
            <!--Card uno-->
            <a href="gestionar_amigos_principal.php" class="linkBlack">
                <div class="card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_1 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title">Gestionar amigos.</p>
                    </div>
                </div>
            </a>
            <!--Card dos-->
            <a href="gestionar_intercambios_principal.php" class="linkBlack">
                <div class="card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_2 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title">Gestionar intercambios.</p>
                    </div>
                </div>  
            </a>
            <!--Card tres-->
            <a href="gestionar_intercambios_en_curso_principal.php" class="linkBlack">
                <div class="card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_3 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title">Intercambios en curso.</p>
                    </div>
                </div>
            </a>
            <!--Card cuatro-->
            <a href="gestionar_invitaciones_recibidas_principal.php" class="linkBlack">
                <div class="card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_4 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title">Invitaciones recibidas.</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!--Cards en tablets-->
    <section class="cream_ours_color hide-on-small-only hide-on-large-only">
    <div class="title_all">
        <p class="black-text">Opciones principales.</p>
    </div>
    <div style="width: 100%; margin: 20px 0 20px 65px;" class="row">
        <a href="gestionar_amigos_principal.php" class="linkBlack">
            <div class="card_principal z-depth-2 waves-effect col m5">
                <div class="card_image_container img_1 z-depth-2"></div>
                <div class="title_container">
                    <p class="title">Gestionar amigos.</p>
                </div>
            </div>
        </a>
        <!--Card dos-->
        <a href="gestionar_intercambios_principal.php" class="linkBlack">
            <div class="card_principal z-depth-2 waves-effect col m5">
                <div class="card_image_container img_2 z-depth-2"></div>
                <div class="title_container">
                    <p class="title">Gestionar intercambios.</p>
                </div>
            </div>  
        </a>
        <!--Card tres-->
        <a href="gestionar_intercambios_en_curso_principal.php" class="linkBlack">
            <div class="card_principal z-depth-2 waves-effect col m5">
                <div class="card_image_container img_3 z-depth-2"></div>
                <div class="title_container">
                    <p class="title">Intercambios en curso.</p>
                </div>
            </div>
        </a>
        <!--Card cuatro-->
        <a href="gestionar_invitaciones_recibidas_principal.php" class="linkBlack">
            <div class="card_principal z-depth-2 waves-effect col m5">
                <div class="card_image_container img_4 z-depth-2"></div>
                <div class="title_container">
                    <p class="title">Invitaciones recibidas.</p>
                </div>
            </div>
        </a>
    </div>
    </section>

    <!--Info adicional-->

    <section class="ayuda_container hide-on-small-only">
        <div class="card bistre_ours_color card_help z-depth-3">
            <div class="card-content white-text">
                <span class="card-title">Información adicional</span>
                <p>Seleccione algunas de las cards para agregar personas dentro de algún evento de eintercambios, gestionar los intercambios, ver el estado de los intercambios en curso y las invitaciones actuales.</p>
                </div>
            </div>
        </div>
    </section>
            
    <section class="container_cards cooper_ours_color hide-on-med-and-up">
    <div class="title_all">
        <p>Principal.</p>
    </div>
        <div class="container_cards_secondary">
            <div class="owl-carousel owl-theme" id="owl-carousel">
                <!--Card uno-->
                <a href="gestionar_amigos_principal.php" class="linkBlack">
                <div class="item card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_1 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title center">Gestionar amigos.</p>
                    </div>
                </div>
                </a>
                <!--Card dos-->
                <a href="gestionar_intercambios_principal.php" class="linkBlack">
                <div class="item card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_2 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title center">Gestionar intercambios.</p>
                    </div>
                </div>
                </a>
                <!--Card tres-->
                <a href="gestionar_intercambios_en_curso_principal.php" class="linkBlack">
                <div class="item card_principal z-depth-2 waves-effect">
                    <div class="card_image_container img_3 z-depth-2"></div>
                    <div class="title_container">
                        <p class="title center">Intercambios en curso.</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </section>

    <section class="card_down_principal cream_ours_color hide-on-med-and-up">
        <div class="card_container_link">
            <a href="gestionar_invitaciones_recibidas_principal.php" class="linkWhite">
                <div class="card_container_link_dos">
                    <div class="card_container_small z-depth-4">
                        <div class="image_card_small card_image_container_small"></div>
                        <div class="title_card_small red_ours_color waves-effect waves-light">
                            Invitaciones recibidas
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <div class="fixed-action-btn">
        <a href="help.php" class="btn-floating btn-large waves-effect waves-light bistre_ours_color">
            <i class="large material-icons">help</i>
        </a>
    </div>

</body>

<?php include('1_js.php'); ?>

</html>