
	<link rel="stylesheet" type="text/css" href="plataforma/css/reset.css">
	<link rel="stylesheet" type="text/css" href="plataforma/css/bootstrap_header.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="plataforma/js/menuresponsive.js"></script>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
      if(!isset($_SESSION)) 
    { 
        session_start();
    } 

   require "plataforma/includes/conectar_Session.php";
   
     
  if (isset($_SESSION['user_id'])) : require 'plataforma/includes/session.php'; ?>


<title>Equipos Android</title>
<body>
	<header class="container">		
			<nav class="navbar">
			  <div class="container-fluid">			    
			    <div class="navbar-header">
                                
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
                                     <a class="navbar-brand" href="http://127.0.0.1/Equipos_android/index.php" id="label">Equipos Android</a>
                                     <a class="navbar-img" href="http://127.0.0.1/Equipos_android/index.php"id="label"> <img src= "http://127.0.0.1/equipos_android/recursos/Android_logo.png" id="logo"></a> 
			    </div>
                              
                              
			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="navbar-nav-right">
			     <?php
			       /* <li class="dropdown">
			          <a href="https://www.henry-chavez.com" class="dropdown-toggle">Menu<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="https://www.henry-chavez.com">Action</a></li>
			            <li><a href="https://www.henry-chavez.com">Another action</a></li>
			            <li><a href="https://www.henry-chavez.com">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="https://www.henry-chavez.com">Separated link</a></li>

			          </ul>
			        </li>*/
                                ?>
			      </ul>			      
			      <ul class="nav navbar-nav navbar">
			        <li class="dropdown">
                                    <a class="dropdown-toggle" id="label"> <?= $user['usuario'];?>  <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="http://127.0.0.1/Equipos_android/inicio.php" id="label">Inicio</a></li>
			            <li><a href="http://127.0.0.1/Equipos_android/Sign_up.php" id="label">Registrar</a></li>
			            <li><a href="http://127.0.0.1/Equipos_android/logout.php" id="label">Salir</a></li>
			            <li class="divider"></li>
                                      <li class="dropdown">
					          <a href="http://127.0.0.1/Equipos_android/Add_equip" class="dropdown-toggle" id="label">Menu <b class="caret right"></b></a>
					          <ul class="dropdown-menu">
					            <li><a href="http://127.0.0.1/Equipos_android/Add_equip.php" id="label">Registrar nuevo equipo</a></li>
					            <li><a href="http://127.0.0.1/Equipos_android/Delete_update_equip.php" id="label">Borrar o actualizar equipo</a></li>
					            <li><a href="http://127.0.0.1/Equipos_android/" id="label">Configurar Impresora</a></li>
					            <li class="divider"></li>
					            <li><a href="http://127.0.0.1/Equipos_android/" id="label">Crear etiqueta</a></li>
					          </ul>
				        </li>
			          </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>		
	</header>
</body>
 <?php else:    ?>
    <title>Equipos Android</title>
<body>
	<header class="container" id="contain">		
			<nav class="navbar">
			  <div class="container-fluid">			    
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			       <a class="navbar-brand" href="http://127.0.0.1/Equipos_android/index.php" id="label">Equipos Android</a>
                                <a class="navbar-img" href="http://127.0.0.1/Equipos_android/index.php" id="label"> <img src= "http://127.0.0.1/equipos_android/recursos/Android_logo.png" id="logo"></a> 
			    </div>
			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="navbar-nav">
			     
			       <?php /* <li class="dropdown">
			          <a href="https://www.henry-chavez.com" class="dropdown-toggle"> Menu <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="https://www.henry-chavez.com">Action</a></li>
			            <li><a href="https://www.henry-chavez.com">Another action</a></li>
			            <li><a href="https://www.henry-chavez.com">Something else here</a></li>
			            <li class="divider"></li>
			            <li><a href="https://www.henry-chavez.com">Separated link</a></li>

			          </ul>
			        </li>*/ ?>
			      </ul>			      
			      <ul class="nav navbar-nav navbar-right">
			        <li class="dropdown">
			         <a href="http://127.0.0.1/Equipos_android/Sign_in.php" id="label" >Ingresar <b class="caret right"></b></a>
			          
			        </li>
			      </ul>
			    </div>
			  </div>
			</nav>		
	</header>
</body>

   <?php endif ?> 