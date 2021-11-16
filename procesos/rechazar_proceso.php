<?php

    session_start();
    $usuarioCreador = $_SESSION['name'];
    
    $idIntercambio = $_GET['idIntercambio'];
    $idUsuario = $_GET['idUsuario'];
    
    require('config.php');
    $sql = "INSERT INTO amigointercambio (idamigoIntercambio, idIntercambio, idAmigo, regalo, vistoSolicitud) 
    VALUES (
        DEFAULT,
        '".$idIntercambio."',
        '".$idUsuario."',
        'No hay regalo',
        'Rechazado')";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_invitaciones_recibidas_principal.php');      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>