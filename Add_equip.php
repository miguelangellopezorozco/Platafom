<?php

   require "plataforma/includes/session.php";
   require "plataforma/includes/conectar_Session.php";
    
   

   if (!empty($_POST['Service_tag']) && !empty($_POST['Category']) && !empty($_POST['Plant']) && !empty($_POST['End_contract'])) 
     {
    //con este codigo php se suben archivos y texto al servidor mysql y se obtienen del formulario con el metodo post
          $imagen_name= $_FILES['Logo']['name'];
          $imagen_size = $_FILES['Logo']['size'];
          $imagen_type= $_FILES['Logo']['type'];
          
          $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/Equipos_android/plataforma/archivos';
          
          move_uploaded_file($_FILES['Logo']['tmp_name'], $carpeta_destino.$imagen_name);
          
          //aqui se convierte el arhivo o imagen en una cadena de bytes
          $archivo_objetivo = fopen($carpeta_destino.$imagen_name,"r");
          $conten= fread($archivo_objetivo,$imagen_size);
          fclose($archivo_objetivo);
         
            $sql = "INSERT INTO equipos(Id,Service_tag,Category,Plant,End_contract,Logo) VALUES ('NULL',:Service_tag, :Category, :Plant, :End_contract, :Logo)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':Service_tag',$_POST['Service_tag']);
           $stmt->bindParam(':Category',$_POST['Category']);
            $stmt->bindParam(':Plant',$_POST['Plant']);
            $stmt->bindParam(':End_contract',$_POST['End_contract']);
            $stmt->bindParam (':Logo',($conten));
  
            if ($stmt->execute()) { 
                echo '';
            } else {
               echo "";
            }
     }

     
     

   ?> 

<html>
    
    <head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
     <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_sign_up.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Plataforma</title>
    </head>
    

    <body>
        <header>   <?php require 'plataforma/includes/header.php'?> </header>
        
         <article id="area_registro">
            <form action="Add_equip.php" method="POST" enctype="multipart/form-data" > 
 
                Service Tag <br>
                <input type="text" name="Service_tag" placeholder="Introduce el service tag" required><br>
                Categoria <br>
                <input type="text" name="Category" placeholder="Introduce la categoria del equipo" required><br>
                Planta <br>
                <input type="text" name="Plant" placeholder="Introduce la planta del equipo" required><br>
                Finalizacion del contrato <br>
                <input type="date" name="End_contract" placeholder="Introduce la fecha de finalizacion" required><br>
                Logo </br>
                <input type="file" name="Logo" id="foto"></br>
              
         
                <br>
                <br>

                <input type="submit" value="Registrar"><br>

            </form>

        </article>
        
    </body> 
    
</html> 