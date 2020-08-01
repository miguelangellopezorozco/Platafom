<?php

   require "plataforma/includes/session.php";
   require "plataforma/includes/conectar_Session.php"; 
   require './plataforma/includes/Conectar.php';

   

   ?> 

<html>
    
    <head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
     <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_inicio.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Plataforma</title>
    </head>
    
    

    <body>
        <header>   <?php require 'plataforma/includes/header.php'?> </header>
        
    <div id="Main_div">    
 
        
  <div id = "div_inicio">
        
    <h1 id = 'Bienvenida'>Bienvenido</h1> 
    

    
        </div>
     <div id="div_central">
        <?php   require_once'./plataforma/includes/Tabla_datos.php';?>
     </div>
       <div id="div_final">   

        </div>
       </div>
    </body> 
    
</html> 