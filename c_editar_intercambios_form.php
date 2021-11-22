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

    <!--Editar los elementos-->
    <?php
        require_once('procesos/config.php');
        session_start();
        $usuarioCreador = $_SESSION['name']; 
        $temaGet = $_GET['tema'];

        //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
        $sql = "SELECT `idIntercambio`,idUsuario,`tema`,`montoMax`,`tema1`,`tema2`,`tema3`,`limRegistro`,`limIntercambio`,`comentarios`,`amigosSeleccionados` FROM `intercambios` WHERE `tema` = '$temaGet'";
        $result = $conn->query($sql);
        if (mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $idIntercambio = $row["idIntercambio"];
                    $idUsuario = $row["idUsuario"];
                    $tema = $row["tema"];
                    $montoMax = $row["montoMax"];
                    $tema1 = $row["tema1"];
                    $tema2 = $row["tema2"];
                    $tema3 = $row["tema3"];
                    $limRegistro = $row["limRegistro"];
                    $limIntercambio = $row["limIntercambio"];
                    $comentarios = $row["comentarios"];
                    $amigosSeleccionados = $row["amigosSeleccionados"];
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    ?>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content">
                    <span class="card-title"><strong>Editar intercambio</strong></span>

                    <br>
                    
                    <form action="procesos/c_editarIntercambios_proceso.php" method="get">
                        <div class="input-field col s12 m4 l4">
                            <input id="tematica" name="tematica" type="text" class="validate" value="<?php echo $tema?>">
                            <label for="tematica">Temática uno</label>
                        </div>

                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaUno" name="tematicaUno" type="text" class="validate" value="<?php echo $tema1?>">
                            <label for="tematicaUno">Temática uno</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaDos" name="tematicaDos" type="text" class="validate" value="<?php echo $tema2?>">
                            <label for="tematicaDos">Temática dos</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaTres" name="tematicaTres" type="text" class="validate" value="<?php echo $tema3?>">
                            <label for="tematicaTres">Temática tres</label>
                        </div>

                        <!--Buscar a los amigos-->
                        <?php 
                            $contador = 0;
                            $amigosTotal = "";

                            $sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `idUsuario` = (SELECT `idUsuario` FROM `usuarios` WHERE `nombreUsuario` = '$usuarioCreador')";

                            echo "

                            <div class='input-field col s12'>
                            <p class='black-text'>Elige a tus amigos</p>
                            <select multiple name='amigosSelect[]'>
                                <option style='color:#000 !important;' value='' disabled selected></option>
                            
                            ";

                            $result = $conn->query($sql);
                            if (mysqli_query($conn, $sql)) {
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        $nombreAmigo = $row["nombreAmigo"];
                                        echo "
                                            <option style='color:#000 !important;' value='$nombreAmigo'>$nombreAmigo</option>
                                        ";
                                    }
                                } else {
                                    echo "0 results";
                                }
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                            mysqli_close($conn);

                            echo "
                            </select>
                            </div>
                        
                            ";
                        ?>

                        <div class="input-field col s12 m12 l6">
                            <input id="montoMax" name="montoMax" type="number" class="validate" value="<?php echo $montoMax?>">
                            <label for="montoMax">Monto máximo</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="limiteFecha" name="limiteFecha" type="text" class="validate datepicker" value="<?php echo $limRegistro?>">
                            <label for="limiteFecha">Fecha límite de registro</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="intercambioFecha" name="intercambioFecha" type="text" class="validate datepicker" value="<?php echo $limIntercambio?>">
                            <label for="intercambioFecha">Fecha de intercambio</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="comentarios" type="text" name="comentarios" value="<?php echo $comentarios?>" data-length="120"></input>
                            <label for="comentarios">Comentarios adicionales.</label>
                        </div>

                        <div class="col s12 m12 l12 center">
                            <input class="waves-effect waves-light black-text btn-large cream_ours_color" type="submit" value="Editar información">
                        </div>
                    </form>

                    <br>
                    &nbsp; <br>
                    <div style="width: 100%;" class="center">
                        <img src="images/EditarIntercambio.png" width="250px">
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
<?php include('1_js.php'); ?>
</html>