<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos intercambio.</title>
    <?php include('1_css.php')?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Sorteo.</a>
        <a href="gestionar_intercambios_en_curso_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Sorteo.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="b_opciones_intercambios.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <div class="container" style="width: 100%; margin: 40px 0 20px 0; display: flex; justify-content: center;">
        <img src="images/ruleta.gif" width="30%" class="center-align">
    </div>

    <div class="container cream_ours_color" style="width: 100%; margin: 0 0 40px 0; display: flex; justify-content: left; flex-direction: column; padding: 0 30px 20px 30px;">
        <h4>Resultados</h4>
        <table class="">
            <thead>
            <tr>
                <th>Amigos por parejas</th>
            </tr>
            </thead>

            <tbody>
            <?php 
                require('procesos/config.php');
                $idIntercambio = $_GET['idIntercambio'];
                $nombreAmigo = "";
                $sql = "SELECT `nombreAmigo` FROM `amigointercambio` WHERE `idIntercambio` = '$idIntercambio' AND `vistoSolicitud` = 'Aceptado'";
                $result = $conn->query($sql);
                if (mysqli_query($conn, $sql)) {
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $nombreAmigo .= $row["nombreAmigo"] . "<br>";
                        }
                    }else {
                        echo "Sin Participantes";
                    }
        
                } else { 
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                $amigosSeleccionados = $nombreAmigo;
                $amigosSeleccionados = str_replace("<br>", " ", $amigosSeleccionados);
                $amigosAsignados = "";

                $separados = explode(" ", $amigosSeleccionados);
                array_pop($separados);
                shuffle($separados);
                if(count($separados) % 2 == 0){
                    for($i = 0; $i < count($separados); $i++) {
                        if($i == 1 || $i == 0){
                            echo 
                            "<tr><td> (1) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(1)" . $separados[$i];
                        }elseif($i == 2 || $i == 3){
                            echo 
                            "<tr><td> (2) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(2)" . $separados[$i];
                        }elseif($i == 4 || $i == 5){
                            echo 
                            "<tr><td> (3) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(3)" . $separados[$i];
                        }elseif($i == 6 || $i == 7){
                            echo 
                            "<tr><td> (4) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(4)" . $separados[$i];
                        }elseif($i == 8 || $i == 9){
                            echo 
                            "<tr><td> (5) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(5)" . $separados[$i];
                        }elseif($i == 10 || $i == 11){
                            echo 
                            "<tr><td> (6) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(6)" . $separados[$i];
                        }
                    };
                }else{
                    for($i = 0; $i < count($separados); $i++) {
                        if($i == 1 || $i == 0 || $i == 2){
                            echo 
                            "<tr><td> (1) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(1)" . $separados[$i];
                        }elseif($i == 3 || $i == 4){
                            echo 
                            "<tr><td> (2) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(2)" . $separados[$i];
                        }elseif($i == 6 || $i == 5){
                            echo 
                            "<tr><td> (3) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(3)" . $separados[$i];
                        }elseif($i == 8 || $i == 7){
                            echo 
                            "<tr><td> (4) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(4)" . $separados[$i];
                        }elseif($i == 10 || $i == 9){
                            echo 
                            "<tr><td> (5) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(5)" . $separados[$i];
                        }elseif($i == 12 || $i == 11){
                            echo 
                            "<tr><td> (6) $separados[$i]</td></tr>";
                            $amigosAsignados .= "(6)" . $separados[$i];
                        }
                    };
                }
            ?>
            </tbody>
        </table>
    </div>

    <?php
        $sql = "UPDATE `amigointercambio` SET `sorteoResultado`='$amigosAsignados' WHERE `idIntercambio`='$idIntercambio' AND `vistoSolicitud` = 'Aceptado'";
        require_once('procesos/enviaremail.php');
        
        mysqli_close($conn);
    ?>

    <section class="buttonsContainer">
        <div>
            <a href="index.php" class="waves-effect waves-light btn-large cooper_ours_color_dark"><i class="material-icons left">done</i>Adelantar sorteo.</a>
        </div>
    </section>
    <div class="">
        <br><br><br>
    </div>

    <div class="fixed-action-btn">
        <a href="#" onclick="window.location.reload(true);" class="btn-floating btn-large cooper_ours_color_dark">
            <i class="large material-icons">refresh</i>
        </a>
    </div>

    
</body>
<?php include '1_js.php'; ?>
</html>