<?php

    session_start();
    $usuarioCreador = $_SESSION['name'];
    
    $idIntercambio = $_GET['idIntercambio'];
    $idUsuario = $_GET['idUsuario'];
    $regalo = $_GET['regalo'];

    $claveAleatoria = rand(100000, 999999);
    
    require('config.php');
    $sql = "INSERT INTO amigointercambio (idamigoIntercambio, idIntercambio, idAmigo,nombreAmigo, regalo, vistoSolicitud, sorteoResultado, claveAleatoria) 
    VALUES (
        DEFAULT,
        '".$idIntercambio."',
        '".$idUsuario."',
        '".$usuarioCreador."',
        '".$regalo."',
        'Aceptado',
        'Sin_sorteo',
        '".$claveAleatoria."')";
    if (mysqli_query($conn, $sql)) {
             
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "DELETE FROM `amigointercambio` WHERE `nombreAmigo`='$usuarioCreador' AND `vistoSolicitud`='Rechazado'";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_invitaciones_recibidas_principal.php');    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>