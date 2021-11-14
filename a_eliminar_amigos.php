<?php
    require_once('procesos/config.php');
    $correoAmigo = $_POST['correoAmigo'];
    $correoAmigo = str_replace ( "%40" , "@" , $correoAmigo);

    //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
    //$sql = "SELECT `nombreAmigo` FROM `amigos` WHERE `correoAmigo` = '$correoAmigo'";
    //$sql = "UPDATE `amigos` SET `correoAmigo`='$correoAmigoNew',`nombreAmigo`='$nombreAmigo' WHERE `correoAmigo`='$correoAmigoNew'";
    $sql = "DELETE FROM `amigos` WHERE `correoAmigo`='$correoAmigo'";
    if (mysqli_query($conn, $sql)) {
        header('Location:gestionar_amigos_principal.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>