<?php

session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login23.html"); 
    exit;
}

echo "<h1>Bienvenido, " . $_SESSION['username'] . "!</h1>";
echo "<p>Has iniciado sesión correctamente.</p>";
echo "<a href='logout23.php'>Cerrar sesión</a>"; 
?>
