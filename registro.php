<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Spotify de Pobres</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div class="container">
        <h1>Registro de usuario</h1>
        <form action="php\register.php" method="post">
            <input type="text" name="username" id="username" placeholder="Usuario" required>
            <input type="password" name="password" id="password" placeholder="Contrasena" required>
            <button type="submit">Crear Cuenta</button>
        </form>
        <p>Ya tienes cuenta? <a href="login.php">Inicia sesion aca</a></p>
    </div>
</body>

</html>