<?php
// config23.php
$servername = "localhost";
$username = "root"; // Usuario por defecto de XAMPP
$password = ""; // Contraseña por defecto (vacío)
$dbname = "funeraria"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

