<?php
require_once('config.php');

//Variable para checar si hay fallos
$error = "normal";

//Verifcamos que la variable no este vacia
if(!empty($_GET['name']) && !empty($_GET['alias']) && !empty($_GET['correo'])
&& !empty($_GET['password']) && !empty($_GET['password_reafirmar'])){
        //Guardamos todo en variables locales
        $nombreUsuario = $_GET['name'];
        $aliasUsuario = $_GET['alias'];
        $correoUsuario = $_GET['correo'];
        $passwordUsuario = $_GET['password'];
        $password_reafirmar = $_GET['password_reafirmar'];

        //Hacemos validaciones especificas para cada uno de los campos.

        if(!is_string($nombreUsuario) || !preg_match("/^[a-zA-Z ]+/", $nombreUsuario)){
            $error = "nombre";
            header('Location:../sign_up.php?error=' . $error);
        }

        if(!is_string($aliasUsuario) || !preg_match("/^[a-zA-Z ]+/", $aliasUsuario)){
            $error = "alias";
            header('Location:../sign_up.php?error=' . $error);
        }

        //Validamos igual que email sea texto y usamos filter_var
        if(!is_string($correoUsuario) || !filter_var($correoUsuario, FILTER_VALIDATE_EMAIL)){
            $error = "email";
            header('Location:../sign_up.php?error=' . $error);
        }

        //Validamos la longitud del password
        if(empty($passwordUsuario) || strlen($passwordUsuario)<5){
            $error = "contrasena";
            header('Location:../sign_up.php?error=' . $error);
        }

        //Ingresamos nuestros datos
        if($error == "normal"){   
            $sql = "INSERT INTO usuarios (idUsuario, nombreUsuario, alias, correo, contra) VALUES (DEFAULT,'".$nombreUsuario."','".$aliasUsuario."','".$correoUsuario."','".$passwordUsuario."')";

            if (mysqli_query($conn, $sql)) {
                session_start();
                
                $_SESSION['name']  = $nombreUsuario;
                $_SESSION['alias'] = $aliasUsuario;
                $_SESSION['correo'] = $correoUsuario;
                $_SESSION['password'] = $passwordUsuario;
                
                header('Location:../index.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        }else{
            //Si hay datos incompletos debemos enviar el siguiente mensaje.
            $error = "faltan";
            header('Location:../sign_up.php?error=' . $error);
        }
    }else{
       //Si hay datos incompletos debemos enviar el siguiente mensaje.
       $error = "faltan";
       header('Location:../sign_up.php?error=' . $error); 
    }

?> 