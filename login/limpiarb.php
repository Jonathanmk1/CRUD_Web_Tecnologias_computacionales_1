<?php
session_start();
session_unset();    // Limpia todas las variables de sesión
session_destroy();  // Cierra la sesión

header("Location: index.php");  // Redirige al login
exit();
?>
