<?php   
/*Esta linea hace que no aparezcan los mensajes de error en la pagina*/
error_reporting(E_ERROR);  


session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: http://127.0.0.1/Equipos_android/inicio.php');
  }
  require "plataforma/includes/conectar_Session.php";

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, usuario, password,tipo FROM usuarios WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: http://127.0.0.1/Equipos_android/inicio.php ");
    } else {
      echo '<html>';
       echo '<script type="text/javascript" src=" http://127.0.0.1/Equipos_android/plataforma/js/sign_in.js"></script>';
       echo '<body onload="cargar();">';
        echo '</body>';
       echo '</html>';
    }
  }
?> 

<html>

    
    
    <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_in.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    
        <?php /*Esto permite que si se ingresa con dispositivo mobil se acople a su tamano*/?>
    <meta name ="viewport" content="width=device width, user scalable=no, initial scale=1.0,
          maximum-scale=1.0,minimum=1.0 ">
    <body>
          
   <?php require 'plataforma/includes/header.php'?>
        
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>


        <article id="ingreso">
        <form action= 'http://127.0.0.1/Equipos_android/Sign_in.php' method="post" enctype="multipart/form-data"> 
             
            Usuario <br>
            <input type="text" name="usuario" placeholder="Introduce tu usuario" required=""><br>
            Password <br>
            <input type="password" name="password" placeholder="Introduce tu contraseña" required><br>

            <br>
            <br> 
              
            <input type="submit" value="Iniciar sesion"><br> 
            <?php
            /*<input type="button" id="sign_up" value="Registrarse" onclick="location.href='sign_up.php'" ><br>*/
            ?>
        </form>
        </article>

    </body>
</html>

