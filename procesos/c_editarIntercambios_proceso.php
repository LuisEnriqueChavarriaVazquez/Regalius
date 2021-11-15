<?php
    require_once('config.php');
    $tema = $_GET['tematica'];
    $montoMax = $_GET['montoMax'];
    $tema1 = $_GET['tematicaUno'];
    $tema2 = $_GET['tematicaDos'];
    $tema3 = $_GET['tematicaTres'];
    $limRegistro = $_GET['limiteFecha'];
    $limIntercambio = $_GET['intercambioFecha'];


    //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
    //$sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `correoAmigo` = '$correoAmigo'";
    //,
    $sql = "UPDATE `intercambios` SET `tema`='$tema',`tema1`='$tema1',`tema2`='$tema2',`tema3`='$tema3',`limRegistro`='$limRegistro',`limIntercambio`='$limIntercambio' WHERE `montoMax`='$montoMax'";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_intercambios_principal.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>