<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$dbname = "edoc"; 

$database = new mysqli("localhost","root","","edoc");
if ($database->connect_error) {
    die("Échec de la connexion : " . $database->connect_error);
}
?>

