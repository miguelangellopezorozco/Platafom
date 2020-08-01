<?php
        $message;
         require "plataforma/includes/conectar_Session.php";
       

             require 'plataforma/includes/session.php';
             if (($user['tipo'])== 'Administrador') :  require 'plataforma/includes/session.php';
             
             
             
             
  if (!empty($_POST['usuario']) && !empty($_POST['password'])&& !empty($_POST['nombre'])&& !empty($_POST['tipo'])) {
    $sql = "INSERT INTO usuarios (usuario, password, nombre, tipo, foto) VALUES (:usuario, :password, :nombre, :tipo, :foto)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':tipo', $_POST['tipo']);
    $stmt->bindParam(':foto', $_POST['foto']);

    if ($stmt->execute()) {
      
      $message = 'Successfully created new user';
    header("Location: http://127.0.0.1/Equipos_android/index.php");
    $stmt ->closeCursor();
    } else {
   $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>

<html> 
  
    <head>
        <?php //lo puse con un script de lenguaje php porque el servidor web que rento no lo reconoce declarandoo de manera normal ?>
        <script language="php">

        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_up.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body> 

       
  
        <article id="area_registro">
            <form action="sign_up.php" method="POST" > 
 
                Usuario <br>
                <input type="text" name="usuario" placeholder="Introduce tu usuario" required><br>
                Password <br>
                <input type="password" name="password" placeholder="Introduce tu contraseña" required><br>
                Password <br>
                <input type="password" name="conf_pass" placeholder="confirma tu contraseña" required><br>
                Nombre <br>
                <input type="text" name="nombre" placeholder="Introduce tu nombre" required><br>
                Foto </br>
                <input type="file" name="foto" id="foto"></br>
                Tipo <br>
                <select name="tipo" id="tipo" required> 
                    <option value="Administrador">Administrador </option>
                    <option value ="Usuario"> Usuario</option>
                </select>
                <br>
                <br>

                <input type="submit" value="Registrar"><br>

            </form>

        </article>
        <article id="mensaje_error">
             <?php require 'plataforma/includes/header.php' ?>
        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
            </article>
        
         <?php else: ?>
        
  
    <head>
        <?php //lo puse con un script de lenguaje php porque el servidor web que rento no lo reconoce declarandoo de manera normal ?>
        <script language="php">

        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_up.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body> 

       
  
        <article id="area_registro">
            <form action="sign_up.php" method="POST" > 
 
                Usuario <br>
                <input type="text" name="usuario" placeholder="Introduce tu usuario" required><br>
                Password <br>
                <input type="password" name="password" placeholder="Introduce tu contraseña" required><br>
                Password <br>
                <input type="password" name="conf_pass" placeholder="confirma tu contraseña" required><br>
                Nombre <br>
                <input type="text" name="nombre" placeholder="Introduce tu nombre" required><br>
                Foto </br>
                <input type="file" name="foto" id="foto"></br>
                </select>
                <br>
                <br>

                <input type="submit" value="Registrar"><br>

            </form>

        </article>
        <article id="mensaje_error">
             <?php require 'plataforma/includes/header.php' ?>
        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
            </article>
         <?php endif; ?>
    </body>
</html>