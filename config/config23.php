<?php
// config23.php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "funeraria"; 


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexion
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

