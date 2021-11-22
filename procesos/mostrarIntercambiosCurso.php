<?php
require_once('config.php');
session_start();
$usuarioCreador = $_SESSION['name']; 

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$sql = "SELECT `tema`,`amigosSeleccionados`,`idIntercambio` FROM `intercambios` WHERE `idUsuario` = (SELECT `idUsuario` FROM `usuarios` WHERE `nombreUsuario` = '$usuarioCreador')";
$result = $conn->query($sql);
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $tema = $row["tema"];
            $idIntercambio = $row["idIntercambio"];
            $amigosSeleccionados = $row["amigosSeleccionados"];
            echo "
            <div class='col s12 m12 l6 cardPadreContainer'>
                <a href='b_a_datos_intercambio.php?tema=$tema&idIntercambioBase=$idIntercambio' class='linkBlack'>
                    <div class='cardContador cultured_ours_color z-depth-2 waves-effect'>
                        <div class='cardContadorTitle flow-text'>
                            ";
                            echo $tema; 
            echo "
                        </div>
                        <div class='cardContadorImage'>
                            <span class='new badge badgeDiseno' data-badge-caption='personas'>";
                            echo substr_count($amigosSeleccionados, '/'); 
            echo               "</span>
                        </div>
                    </div>
                </a>
            </div>
            
            ";
        }
    } else {
        echo "
        <div class='row' width='100%'>
            <div class='col s12' 
            style='display: flex; 
            justify-content: center; 
            align-items: center; 
            flex-direction: column;'>
                <h4>No hay resultados</h4>
                <img src='images/noRes.png' width='30%'>
            </div>
        </div>
        ";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?> 