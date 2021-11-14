<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar amigos</title>
    <?php include('1_css.php'); ?>
</head>
<body class="cream_ours_color_dark">

    <?php
        require_once('procesos/config.php');
        session_start();
        $usuarioCreador = $_SESSION['name']; 
        $correoAmigo = $_POST['correoAmigo'];
        $correoAmigo = str_replace ( "%40" , "@" , $correoAmigo);
        $nombreAmigo = "";

        //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
        $sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `correoAmigo` = '$correoAmigo'";
        $result = $conn->query($sql);
        if (mysqli_query($conn, $sql)) {
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $nombreAmigo = $row["nombreAmigo"];
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>

    <!--Menu de página de inicio-->
    <nav class="cooper_ours_color_dark z-depth-3">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo hide-on-small-only">&nbsp;&nbsp;&nbsp;Editar amigos.</a>
        <a href="gestionar_amigos_principal.php" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">arrow_back</i></a>
        <p class="titleMobile flow-text hide-on-med-and-up">Editar amigos.</p>
        <ul class="right hide-on-med-and-down">
            <li><a href="gestionar_amigos_principal.php">Volver al inicio</a></li>
        </ul>
        </div>
    </nav>

    <br><br>

    <div class="row">
        <div class="col s12">
            <div class="card cultured_ours_color">
                <div class="card-content center">
                    <span class="card-title"><strong>Editar amigos</strong></span>

                    <br>
                    <form action="procesos/editarAmigos_proceso.php" method="get">
                        <div class="input-field col s12 m12 l6">
                            <input id="nombreAmigoEditado" name="nombreAmigoEditado" type="text" class="validate" value="<?php echo $nombreAmigo?>">
                            <label for="nombreAmigoEditado">Nombre</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <input id="correoAmigoEditado" name="correoAmigoEditado" type="email" class="validate" value="<?php echo $correoAmigo?>">
                            <label for="correoAmigoEditado">Correo electrónico.</label>
                        </div>
                        
                        <br>
                        <img src="images/editarAmigos.png" width="250px">
                    
                        <div class="col s12 m12 l12 center">
                            <input class="waves-effect waves-light black-text btn-large cream_ours_color" type="submit" value="Editar información">
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>

</body>
<?php include('1_js.php'); ?>
</html>