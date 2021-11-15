<?php

    session_start();
    $usuarioCreador = $_SESSION['name'];
    require_once('config.php');

    $tema = $_GET['tema'];
    $montoMax = $_GET['montoMaximo'];
    $tema1 = $_GET['tematicaUno'];
    $tema2 = $_GET['tematicaDos'];
    $tema3 = $_GET['tematicaTres'];
    $limRegistro = $_GET['limiteFecha'];
    $limIntercambio = $_GET['intercambioFecha'];
    $comentario = $_GET['comentarios'];

    foreach ($_GET['amigosSelect'] as $selectedOption)
        $amigosTotal = $amigosTotal . "/" . $selectedOption;



    $sql = "INSERT INTO intercambios (idIntercambio, idUsuario, tema, montoMax, tema1, tema2, tema3, limRegistro, limIntercambio, comentarios, amigosSeleccionados) 
    VALUES (
        DEFAULT,
        (SELECT `idUsuario` FROM `usuarios` WHERE `nombreUsuario` = '$usuarioCreador'),
        '".$tema."',
        '".$montoMax."',
        '".$tema1."',
        '".$tema2."',
        '".$tema3."',
        '".$limRegistro."',
        '".$limIntercambio."',
        '".$comentario."',
        '".$amigosTotal."')";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_intercambios_principal.php');      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>