<?php
$servername = "localhost"; // Servidor de MySQL (normalmente "localhost" en XAMPP)
$username = "root"; // Usuario de MySQL (por defecto "root" en XAMPP)
$password = ""; // Contraseña (por defecto en XAMPP está vacía)
$database = "funeraria"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} 

// Opcional: Confirmación de conexión (solo para pruebas)
echo "Conexión exitosa a la base de datos.";
?>
