<?php
    require_once('config.php');
    $correoAmigo = $_GET['correoAmigoEditado'];
    $correoAmigoNew = str_replace ( "%40" , "@" , $correoAmigo);
    $nombreAmigo = $_GET['nombreAmigoEditado'];

    //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
    //$sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `correoAmigo` = '$correoAmigo'";
    $sql = "UPDATE `amigos` SET `correoAmigo`='$correoAmigoNew',`nombreAmigo`='$nombreAmigo' WHERE `correoAmigo`='$correoAmigoNew'";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_amigos_principal.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>