<?php
require('config.php');
session_start();
$usuarioCreador = $_SESSION['name']; 
$tema = $_GET['tema'];

//$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
$sql = "SELECT `idIntercambio`,`idUsuario`,`tema`,`tema1`,`tema2`,`tema3`,`montoMax`,`limRegistro`,`limIntercambio`,`amigosSeleccionados`,`comentarios` FROM `intercambios` WHERE `tema` = '$tema'";
$result = $conn->query($sql);
if (mysqli_query($conn, $sql)) {
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $idIntercambio = $row["idIntercambio"];
            $idUsuario = $row["idUsuario"];
            $temaTitulo = $row["tema"];
            $tema1 = $row["tema1"];
            $tema2 = $row["tema2"];
            $tema3 = $row["tema3"];
            $montoMax = $row["montoMax"];
            $limRegistro = $row["limRegistro"];
            $limIntercambio = $row["limIntercambio"];
            $comentario = $row["comentarios"];
            $amigosSeleccionados = $row["amigosSeleccionados"];
            $amigosSeleccionados = str_replace("/", "<br>", $amigosSeleccionados);


            echo "
            
            <!--Elementos acomodados para la gran pantalla-->
            <section class='hide-on-small-only padreInfos'>
                <div class='infoHugeCard'>
                    <div class='cardInfoElement'>";
            echo "<h4>" . $temaTitulo . "</h4>";
            echo "<p>" . $tema1 . "</p>";
            echo "<p>" . $tema2 . "</p>";
            echo "<p>" . $tema3 . "</p>";
            echo " </div>
                    <div class='cardInfoElement'>
                        <h4>Fechas</h4>";
                        echo "<p>Registro máximo: " . $limRegistro ." </p><br>";
                        echo "<p>Fecha del intercambio: " . $limIntercambio . " </p>";
                    echo "</div>
                    <div class='cardInfoElement'>
                        <h4>Monto</h4>
                        <p><b>"; echo $montoMax; echo "</b> $</p>
                    </div>
                    <div class='cardInfoElement'>
                        <h4>Comentarios</h4>
                        <p class='comentario'>"; echo $comentario; echo "</p>
                    </div>";      
            echo "</div>
                <div class='infoHugeCard'>
                    ";
            require('contador_aceptados.php');  
            require('contador_aceptados_estados.php');
            echo    "
                </div>
            </section>
            
            ";

            echo "
            <section class='container_cards hide-on-med-and-up'>
            <div class='title_all'>
                <p class='black-text'>"; echo $temaTitulo; echo "</p>
                <br><br><br><br><br><br><br><br><br>
            </div>
                <div class='container_cards_secondary'>
                    <div class='owl-carousel owl-theme' id='owl-carousel-datos'>
                        <!--Card dos-->
                        <div class='item'>
                            <div class='cardInfo z-depth-2'>
                                <div class='cardInfoElement'>
                                    <h4>Temas</h4>";
                                    echo "<p>" . $tema1 . "</p>";
                                    echo "<p>" . $tema2 . "</p>";
                                    echo "<p>" . $tema3 . "</p>";
            echo "              </div>
                                <div class='cardInfoElement'>
                                    <h4>Fechas</h4>";
                                    echo "<p>Registro máximo: " . $limRegistro ." </p><br>";
                                    echo "<p>Fecha del intercambio: " . $limIntercambio . " </p>";
            echo "              </div>
                                <div class='cardInfoElement'>
                                    <h4>Monto</h4>
                                    <p><b>"; echo $montoMax; echo "</b> $</p>
                                </div>
                                <div class='cardInfoElement'>
                                    <h4>Comentarios</h4>
                                    <p class='comentario'>"; echo $comentario; echo "</p>
                                </div>";
            echo "           </div>
                        </div>

                        <!--Card dos-->
                        <div class='item'>
                            <div class='cardInfo z-depth-2'>";
            require('contador_aceptados.php');  
            require('contador_aceptados_estados.php');              
            echo               "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            ";

        }
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 