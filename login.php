<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion - Spotify de Pobre</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div class="container">
        <h1>Inicio de Sesion</h1>
        <form action="php\login.php" method="post">
            <input type="text" name="username" id="username" placeholder="Usuario" required>
            <input type="password" name="password" id="password" placeholder="Contrasena (Mi teclado es ingles no tengo ene :P)" required>
            <button type="submit">Entrar</button>
        </form>
        <p>No tienes cuenta? <a href="registro.php">Registrate aqui</a></p>
    </div>
</body>

</html>