<?php
require_once('config.php');

//Verifcamos que la variable no este vacia
if(!empty($_POST['nombreAmigo']) && !empty($_POST['emailAmigo'])){
    //Guardamos todo en variables locales
    session_start();
    $emailAmigo = $_POST['emailAmigo'];
    $nombreAmigo = $_POST['nombreAmigo'];
    //var_dump($_SESSION);
    $usuarioCreador = $_SESSION['name'];

    $sql = "INSERT INTO amigos (idAmigo, idUsuario, nombreAmigo, correoAmigo) 
            VALUES (
                DEFAULT,
                (SELECT `idUsuario` FROM `usuarios` WHERE `nombreUsuario` = '$usuarioCreador'),
                '".$nombreAmigo."',
                '".$emailAmigo."')";
    if (mysqli_query($conn, $sql)) {
        header('Location:../gestionar_amigos_principal.php');      
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}else{
    $error = "faltan";
    header('Location:../gestionar_amigos_principal.php');
}

?> 