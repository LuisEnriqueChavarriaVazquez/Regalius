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
        <a href="gestionar_invitaciones_recibidas_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Sorteo.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_invitaciones_recibidas_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <div class="container" style="width: 100%; margin: 40px 0 20px 0; display: flex; justify-content: center;">
        <img src="images/ruleta.gif" width="50%" class="center-align">
    </div>
    
    <!---Inicio de la table-->
    <div class="container" style="width: 100%; margin: 0 0 40px 0; background-color: #fff; display: flex; justify-content: left; flex-direction: column; padding: 0 30px 20px 30px;">
        <h4>Asignados</h4>
        <table class="striped">
            <thead>
            <tr>
                <th>Parejas</th>
            </tr>
            </thead>
            <tbody>
                
    <?php
        session_start();
        $usuarioCreador = $_SESSION['name'];
        $idIntercambio = $_GET['idIntercambio'];
        
        require('procesos/config.php');
        $sql = "SELECT `sorteoResultado`,`nombreAmigo` FROM `amigointercambio` WHERE `idIntercambio` = '$idIntercambio' AND `vistoSolicitud` = 'Aceptado'";
        $result = $conn->query($sql);
        $contador = 1;
        if (mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($contador == 1) {
                        $sorteoResultado = $row["sorteoResultado"];
                        $sorteoResultado = str_replace("(", " (", $sorteoResultado);
                        $separados = explode(" ", $sorteoResultado);
                        array_shift($separados);
                        for($i = 0; $i < count($separados); $i++) {
                            if(count($separados) % 2 == 0) {
                                if($i % 2 == 0) {
                                    echo "
                                    <tr>
                                    <td>$separados[$i]</td>
                                    "; 
                                }else{
                                    echo "
                                    <td>$separados[$i]</td>
                                    </tr>
                                    "; 
                                }
                            }else{
                                echo "
                                    <td>$separados[$i]</td>
                                    </tr>
                                    "; 
                            }
                        }
                    
                        $contador++;
                    }
                };
            }; 
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>
                
            </tbody>
        </table>
    </div>
    <!--Fin de la tabla-->

    <section class="buttonsContainer">
        <div>
            <a href="index.php" class="waves-effect waves-light btn-large cooper_ours_color_dark"><i class="material-icons left">done</i>Finalizar</a>
        </div>
    </section>
    <div class="">
        <br><br><br>
    </div>

    
</body>
<?php include '1_js.php'; ?>
</html>