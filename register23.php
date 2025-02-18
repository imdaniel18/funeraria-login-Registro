<?php

include 'conexion23.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["role"])) {
        
        // Recoger y limpiar datos
        $username = trim($_POST["username"]);
        $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
        $role = trim($_POST["role"]);

        // Verificar si el usuario ya existe
        $sql_check = "SELECT username FROM Uusuarios WHERE username = ?";
        $stmt_check = $conn->prepare($sql_check);

        if (!$stmt_check) {
            die("❌ Error en la consulta SQL: " . $conn->error); 
        }

        $stmt_check->bind_param("s", $username);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            echo "❌ El usuario ya existe. <a href='register23.html'>Intentar de nuevo</a>";
        } else {
            // Insertar usuario en la base de datos
            $sql = "INSERT INTO Uusuarios (username, password, role) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                die("❌ Error en la consulta SQL: " . $conn->error);
            }

            $stmt->bind_param("sss", $username, $password, $role);

            if ($stmt->execute()) {
                echo "✅ Registro exitoso. <a href='login23.html'>Iniciar sesión</a>";
            } else {
                echo "❌ Error al registrar usuario.";
            }

            $stmt->close();
        }

        $stmt_check->close();
    } else {
        echo "❌ Todos los campos son obligatorios.";
    }
}
?>

