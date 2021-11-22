
<div class='cardInfoElement'>
    <h4>Estado</h4>
    <ul>

<?php 

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$idIntercambioBase = $_GET['idIntercambioBase'];
$sql = "SELECT `idIntercambio`,`idAmigo`,`nombreAmigo`,`vistoSolicitud` FROM `amigointercambio` WHERE `idIntercambio` = '$idIntercambioBase'";
$result = $conn->query($sql);
$contador = 0;
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $idIntercambioDos = $row['idIntercambio'];
            $idAmigoDos = $row['idAmigo'];
            $nombreAmigo = $row['nombreAmigo'];
            $vistoSolicitudDos = $row["vistoSolicitud"];
            //echo $idIntercambio;
            echo "
                            <li class'flow-text'>"; echo $nombreAmigo; echo " // " . $vistoSolicitudDos; echo"</li>
            "; 
        }
    } else {
        echo "0 personas ya aceptaron participar.";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

</ul>
    </div>