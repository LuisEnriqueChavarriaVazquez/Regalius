<?php

    session_start();
    $usuarioCreador = $_SESSION['name'];
    
    $idIntercambio = $_GET['idIntercambio'];
    $idUsuario = $_GET['idUsuario'];

    $claveAleatoria = rand(100000, 999999);
    
    require('config.php');
    $sql = "INSERT INTO amigointercambio (idamigoIntercambio, idIntercambio, idAmigo, nombreAmigo, regalo, vistoSolicitud, sorteoResultado, claveAleatoria) 
    VALUES (
        DEFAULT,
        '".$idIntercambio."',
        '".$idUsuario."',
        '".$usuarioCreador."',
        'No hay regalo',
        'Rechazado',
        'Sin_sorteo',
        '".$claveAleatoria."')";
    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    $sql = "DELETE FROM `amigointercambio` WHERE `nombreAmigo`='$usuarioCreador' AND `vistoSolicitud`='Aceptado'";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_invitaciones_recibidas_principal.php');    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>