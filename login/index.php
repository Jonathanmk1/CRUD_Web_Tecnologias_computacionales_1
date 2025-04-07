<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../frontend/css/log.css">
    <link rel="stylesheet" href="../frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <form action="validar.php" method="post">
        <h1 class="animate__animated animate__backInLeft">LOGIN</h1>
        <p>Usuario <input type="text" placeholder="Ingresa tu nombre" name="usuario" required></p>
        <p>Contraseña <input type="password" placeholder="Ingresa tu contraseña" name="contraseña" required></p>
        <input type="submit" value="Ingresar">
    </form>

    <?php if (isset($_SESSION["error"])): ?>
        <p class="bad mensaje"><?php echo $_SESSION["error"]; unset($_SESSION["error"]); ?></p>
    <?php endif; ?>
</body>
</html>
