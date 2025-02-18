<?php
// Iniciar sesion
session_start();

// Eliminar todas las variables de sesion
session_unset();

// Destruir la sesion
session_destroy();

// Redirigir al formulario de login
header("Location: login23.html");
exit;
?>
