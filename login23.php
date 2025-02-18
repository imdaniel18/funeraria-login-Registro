<?php

include 'conexion23.php';


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consultar la base de datos para verificar si el usuario existe
    $sql = "SELECT * FROM Uusuarios WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si el usuario existe, verificar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Si la contraseña es correcta, iniciar sesión
            $_SESSION['username'] = $username; // Guardar usuario en la sesion
            header("Location: welcome23.php"); // Redirigir a la pagina de bienvenida
            exit;
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "El usuario no existe.";
    }
}

// Cerrar la conexion
$conn->close();
?>
