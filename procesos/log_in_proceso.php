<?php
require_once('config.php');

//Variable para checar si hay fallos
$error = "normal";

//Verifcamos que la variable no este vacia
if(!empty($_GET['nameLogIn']) && !empty($_GET['passwordLogIn'])){
        //Guardamos todo en variables locales
        $nombreUsuario = $_GET['nameLogIn'];
        $passwordUsuario = $_GET['passwordLogIn'];

        //Hacemos validaciones especificas para cada uno de los campos.

        if(!is_string($nombreUsuario) || !preg_match("/^[a-zA-Z ]+/", $nombreUsuario)){
            $error = "nombre";
            header('Location:../log_in.php?error=' . $error);
        }

        //Validamos la longitud del password
        if(empty($passwordUsuario) || strlen($passwordUsuario)<5){
            $error = "contrasena";
            header('Location:../log_in.php?error=' . $error);
        }

        //Ingresamos nuestros datos
        if($error == "normal"){   
            //$sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, aliasUsuario, correoUsuario, passwordUsuario) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";
            $sql = "SELECT `nombreUsuario`, `alias`, `correo`, `contra` FROM `usuarios` WHERE `nombreUsuario` = '$nombreUsuario' AND `contra` = '$passwordUsuario'";
            $result = $conn->query($sql);
            if (mysqli_query($conn, $sql)) {
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        session_start();
                        $_SESSION['name'] = $row["nombreUsuario"]; 
                        $_SESSION['alias'] = $row["alias"];
                        $_SESSION['correo'] = $row["correo"];
                        $_SESSION['password'] = $row["contra"];    
                        header('Location:../index.php');
                    }
                } else {
                    header('Location:../sign_up.php');
                }
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }else{
            //Si hay datos incompletos debemos enviar el siguiente mensaje.
            $error = "faltan";
            header('Location:../log_in.php?error=' . $error);
        }
    }else{
       //Si hay datos incompletos debemos enviar el siguiente mensaje.
       $error = "faltan";
       header('Location:../log_in.php?error=' . $error); 
    }

?> 