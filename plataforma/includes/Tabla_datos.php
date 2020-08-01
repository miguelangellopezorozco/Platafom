<?php

   require "plataforma/includes/session.php";
   require './plataforma/includes/Conectar.php';
   require "./plataforma/includes/phpqrcode/qrlib.php";   
 
?>
 


<html>
    
    <head>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <link rel="stylesheet" type = "text/css" href="plataforma/css/Mi_Estilo_inicio.css">
   <link rel="stylesheet" type = "text/css" href="Librerias/bootstrap/css/bootstrap.css">
   <link rel="stylesheet" type = "text/css" href="Librerias/alertifyjs/css/alertify.css">
   <link rel="stylesheet" type = "text/css" href="Librerias/alertifyjs/css/themes/default.css">
   
   
   <script src = "Librerias/jquery-3.5.1.min.js"></script>
   <script src = "Librerias/bootstrap/js/bootstrap.js"></script>
      <script src = "Librerias/alertifyjs/alertify.js"></script>
   
    <title>Plataforma</title>
    </head>
    

    <body>
   
        <table id="Tabla-equipos">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
             <tr>   
                 <th>Id </th>
                 <th>Service tag</th>
                 <th>Categoria</th>
                 <th>Planta</th>
                 <th>Finalizacion del contrato</th>
                 <th>Logo</th>  
                 <th>Codigo Qr</th>
                 <td>Editar</td>
	         <td>Eliminar</td>
             </tr>
             <?php
             $sql="SELECT * FROM `equipos`";
             $result = mysqli_query($connection,$sql);
             while ($mostrar= mysqli_fetch_array($result)) {
 
                 
          
	 
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = 'temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir)) {
                     mkdir($dir);
                 }

         //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.$mostrar['Service_tag'];
 
        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'M'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = $mostrar['Service_tag']; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 
                 
        
             ?>
             <tr>
                 <td><?php echo $mostrar['Id']?></td>
                 <td><?php echo $mostrar['Service_tag']?></td>
                 <td><?php echo $mostrar['Category']?></td>
                 <td><?php echo $mostrar['Plant']?></td>
                 <td><?php echo $mostrar['End_contract']?></td>
                 <?php/*Con este codigo se desincripta una imagen en formato blob*/?>
                 <td><?php  echo '<img src="data:image/jpge;base64,'.base64_encode(($mostrar['Logo'])) .' "style="width:150px; height:100px"/>';?></td>
                 <td><?php echo '<img src="'.$dir.basename($filename).' "style="width:110px; height:100px"/>'; ?></td>
                 <td>
		<button class="btn btn-warning glyphicon glyphicon-pencil" )></button>
		</td>
		<td>
		<button class="btn btn-danger glyphicon glyphicon-remove"></button>
		</td>
             </tr>
             
             <?php }?>
         </table>
     

  
     
    
       <?php mysqli_close($connection)?>
    </body> 
    
</html> 