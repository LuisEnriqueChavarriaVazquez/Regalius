<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar intercambios</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">
    <!--Menu de página de inicio-->
    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Agregar intercambio.</a>
        <a href="gestionar_intercambios_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Agregar intercambio.</p>
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
                    <span class="card-title"><strong>Agregar intercambio</strong></span>
    
                    <br>

                    <form action="procesos/c_agregar_intercambio_proceso.php" method="GET">

                        <div class="input-field col s12 m4 l4">
                            <input id="tema" name="tema" type="text" class="validate">
                            <label for="tema">Nombre del intercambio</label>
                        </div>
                        
                        <!--Buscar a los amigos-->
                        <?php 
                            session_start();
                            $usuarioCreador = $_SESSION['name'];
                            $contador = 0;
                            $amigosTotal = "";
                            require_once("procesos/config.php");

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

                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaUno" name="tematicaUno" type="text" class="validate">
                            <label for="tematicaUno">Temática uno</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaDos" name="tematicaDos" type="text" class="validate">
                            <label for="tematicaDos">Temática dos</label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="tematicaTres" name="tematicaTres" type="text" class="validate">
                            <label for="tematicaTres">Temática tres</label>
                        </div>

                        <br>

                        <div class="input-field col s12 m12 l6">
                            <input id="montoMaximo" name="montoMaximo" type="number" class="validate">
                            <label for="montoMaximo">Monto máximo</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="limiteFecha" name="limiteFecha" type="text" class="validate datepicker">
                            <label for="limiteFecha">Fecha límite de registro</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="intercambioFecha" name="intercambioFecha" type="text" class="validate datepicker">
                            <label for="intercambioFecha">Fecha de intercambio</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <textarea id="comentarios" name="comentarios" class="materialize-textarea" data-length="120"></textarea>
                            <label for="comentarios">Comentarios adicionales.</label>
                        </div>

                        <div class="col s12 m12 l12 center">
                            <input name="agregar" class="waves-effect waves-light white-text btn-large cream_ours_color" type="submit" value="Agregar">
                        </div>
                    </fom>

                    <br>
                    <div style="width: 100%;" class="center">
                        <img src="images/agregarIntercambio.png" width="250px">
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
<?php include('1_js.php'); ?>
</html>