<?php
require_once('config.php');
session_start();
$usuarioCreador = $_SESSION['name']; 

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$sql = "SELECT `tema` FROM `intercambios` WHERE `idUsuario` = (SELECT `idUsuario` FROM `usuarios` WHERE `nombreUsuario` = '$usuarioCreador')";
$result = $conn->query($sql);
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $tema = $row["tema"];
            echo "
            <div class='col s12 m6 l6'>
                <div class='card cultured_ours_color z-depth-2' style='border-radius:10px;'>
                    <div class='card-content white-text' style='padding: 5px 20px 0px 30px;'>
                        <span class='card-title black-text' style='font-weight:600;'>";
            echo $tema; 
            echo "</span>
                    </div>
                    <div class='card-action' style='padding: 10px; border-radius: 10px;'>
                        <form method='GET' action='c_editar_intercambios_form.php'>
                            <div class='col s6 m6 l6 center'>
                                <button name='tema' class='waves-effect waves-light black-text btn cream_ours_color' type='submit' value='$tema'>&nbsp;     Editar     &nbsp;</button>
                            </div>
                        </form>
                        <form method='GET' action='c_eliminar_intercambios.php'>
                            <div class='col s6 m6 l6 center'>
                                <button name='tema' class='waves-effect waves-light black-text btn cream_ours_color' type='submit' value='$tema'>&nbsp;     Eliminar     &nbsp;</button>
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
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