<?php
/*En este documento se inicia session y se obtienen los datos del usuarip*/
/*Con el primer if se evita que se trate de iniciar session si ya esta iniciada*/
if (!isset($_SESSION['user_id'])) 
  session_start();
   require "plataforma/includes/conectar_Session.php";
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id,usuario, password,tipo  FROM usuarios WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }else
      {
      header("Location:http://127.0.0.1/equipos_android/index.php");
      }
      
?>