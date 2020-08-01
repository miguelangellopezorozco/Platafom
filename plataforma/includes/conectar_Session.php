 <?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'programa_etiquetas';
 

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
 


 $message = '';

   
?>


       

<?php 
 /* //http://ceug.gq ---  http://127.0.0.1/plataforma/index.php
 /* echo '<script type="text/javascript">location.href="http://127.0.0.1/plataforma/index.php"</script>';
    
  * 
  * 
$server = 'sql211.epizy.com:3306';
$username = 'epiz_23968756';
$password = 'soyorgulloceug';
$database = 'epiz_23968756_plataforma';
  * 
$server = 'localhost';
$username = 'root';
$password = 'R3logito';
$database = 'plataforma';
 */