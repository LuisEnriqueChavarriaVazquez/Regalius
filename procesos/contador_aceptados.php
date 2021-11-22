<?php 

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$sql = "SELECT `idIntercambio`,`idAmigo`,`vistoSolicitud` FROM `amigointercambio`";
$result = $conn->query($sql);
$contador = 0;
$contadorRechazo = 0;
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $idIntercambioDos = $row['idIntercambio'];
            $idAmigoDos = $row['idAmigo'];
            $vistoSolicitudDos = $row["vistoSolicitud"];
            //echo $idIntercambio;

            if($idIntercambio == $idIntercambioDos && $vistoSolicitudDos == "Aceptado"){
                $contador++;
            }
            
            if($idIntercambio == $idIntercambioDos && $vistoSolicitudDos == "Rechazado"){
                $contadorRechazo++;
            } 
        
        }
        echo "
                <div class='cardInfoElement'>
                    <h4>Estadísticas</h4>
                    <ul>
                        <li class'flow-text'>"; echo $contador; echo" aceptado.</li>
                        <li class'flow-text'>"; echo $contadorRechazo; echo" rechazado.</li>
                        <li class'flow-text'>"; echo $contadorRechazo + $contador; echo" vistos.</li>
                        <li class'flow-text'>"; echo $_GET['total']; echo" amigos invitados.</li>
                        <li class'flow-text'>"; echo $_GET['total'] - ($contadorRechazo + $contador); echo" sin registrarse.</li>
                    </ul>
                </div>
        ";
    } else {
        echo "0 personas ya aceptaron participar.";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>