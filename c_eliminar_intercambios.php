<?php
    require_once('procesos/config.php');
    $tema = $_GET['tema'];

    //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
    //$sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `correoAmigo` = '$correoAmigo'";
    //$sql = "UPDATE `amigos` SET `correoAmigo`='$correoAmigoNew',`nombreAmigo`='$nombreAmigo' WHERE `correoAmigo`='$correoAmigoNew'";
    $sql = "DELETE FROM `intercambios` WHERE `tema`='$tema'";
    if (mysqli_query($conn, $sql)) {
        header('Location:gestionar_intercambios_principal.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>