<?php
require_once('config.php');
session_start();
$usuarioCreador = $_SESSION['name']; 

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$sql = "SELECT `idIntercambio`,`idUsuario`,`tema`,`tema1`,`tema2`,`tema3`,`montoMax`,`limRegistro`,`limIntercambio`,`amigosSeleccionados`,`comentarios` FROM `intercambios`";
$result = $conn->query($sql);
$contadorVacio = 0;
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $idIntercambio = $row['idIntercambio'];
            $idUsuario = $row['idUsuario'];
            $tema = $row["tema"];
            $tema1 = $row["tema1"];
            $tema2 = $row["tema2"];
            $tema3 = $row["tema3"];
            $montoMax = $row["montoMax"];
            $limIntercambio = $row["limIntercambio"];
            $limRegistro = $row["limRegistro"];
            $comentarios = $row["comentarios"];
            $amigosSeleccionados = $row["amigosSeleccionados"];
            $total = substr_count($amigosSeleccionados, '/');

            //Debemos extraer nuestro nombre de la lista de amigos
            if (str_contains($amigosSeleccionados, $usuarioCreador)) { 
                echo "
                <div class='col s12 m12 l6 cardPadreContainer'>
                    <a href='d_datos_recibidas.php?total=$total&idIntercambio=$idIntercambio&idUsuario=$idUsuario&tema=$tema&tema1=$tema1&tema2=$tema2&tema3=$tema3&montoMax=$montoMax&limRegistro=$limRegistro&limIntercambio=$limIntercambio&comentarios=$comentarios&amigosSeleccionados=$amigosSeleccionados' class='linkBlack'>
                        <div class='cardContador cultured_ours_color z-depth-2 waves-effect'>
                            <div class='cardContadorTitle flow-text'>
                                ";
                                echo $tema; 
                echo "
                            </div>
                            <div class='cardContadorImage'>
                                <span class='new badge badgeDiseno' data-badge-caption='invitados'>"; 
                echo substr_count($amigosSeleccionados, '/'); 
                echo               "</span>
                            </div>
                        </div>
                    </a>
                </div>
                ";
                $contadorVacio++;
            }else{
                if($contadorVacio == 0){
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
                    $contadorVacio++;
                }
            }
        }
    }else{
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
            $contadorVacio++;
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo"
<div class='col s12 m12'>
<div class='card red_ours_color z-depth-2' style='border-radius: 10px !important;'>
    <div class='card-content white-text'>
    <span class='card-title'>Resumen del más reciente.</span>";
require('contador_aceptados_preview.php');  
echo  "
    </div>
</div>
</div>
";

echo "<!-- Modal Structure -->
<div id='modal1' class='modal'>
  <div class='modal-content'>
    <h4>Ayuda</h4>
    <p>El recuadro de la parte de abajo es para poder ver los contenidos de la invitación más reciente</p>
  </div>
  <div class='modal-footer'>
    <a href='#!' class='modal-close waves-effect waves-green btn-flat'>Aceptar</a>
  </div>
</div>

<div class='fixed-action-btn'>
    <a class='btn-floating btn-large red_ours_color modal-trigger' href='#modal1'>
      <i class='large material-icons'>help</i>
    </a>
  </div>";
mysqli_close($conn);

?> 