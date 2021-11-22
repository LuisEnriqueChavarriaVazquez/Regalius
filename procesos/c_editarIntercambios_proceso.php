<?php
    require_once('config.php');
    $amigosTotal = "";
    $tema = $_GET['tematica'];
    $montoMax = $_GET['montoMax'];
    $tema1 = $_GET['tematicaUno'];
    $tema2 = $_GET['tematicaDos'];
    $tema3 = $_GET['tematicaTres'];
    $comentarios = $_GET['comentarios'];
    $limRegistro = $_GET['limiteFecha'];
    $limIntercambio = $_GET['intercambioFecha'];

    foreach ($_GET['amigosSelect'] as $selectedOption)
        $amigosTotal = $amigosTotal . "/" . $selectedOption;

    //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
    $sql = "SELECT `idIntercambio` FROM `intercambios` WHERE `tema` = '$tema'";
    $result = $conn->query($sql);
    $contadorVacio = 0;
    $idIntercambioEdit = "";
    if (mysqli_query($conn, $sql)) {
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $idIntercambioEdit = $row['idIntercambio'];
                if($contadorVacio == 0){
                    $sql = "UPDATE `intercambios` SET `amigosSeleccionados`='$amigosTotal',`comentarios`='$comentarios',`tema`='$tema',`tema1`='$tema1',`tema2`='$tema2',`tema3`='$tema3',`limRegistro`='$limRegistro',`limIntercambio`='$limIntercambio',`montoMax`='$montoMax' WHERE `idIntercambio`='$idIntercambioEdit'";
                    if (mysqli_query($conn, $sql)) {
                        header('Location:../gestionar_intercambios_principal.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    $contadorVacio++;
                }
            }
        }
    }            
    
    mysqli_close($conn);
?>