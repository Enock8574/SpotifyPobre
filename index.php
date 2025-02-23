<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify de Pobre xD</title>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div class="container">
        <h1>Tu Musica WE</h1>
        <form action="php\upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="music" accept=".mp3,.wav" required id="music">
            <button type="submit">Subir Cancion</button>
        </form>
        <div class="player">
            <?php
            $files = glob("uploads/*.{mp3,wav}", GLOB_BRACE);
            foreach ($files as $file) {
                echo "<audio controls><source src='$file' type='audio/mpeg'></audio><br>";
            }
            ?>
        </div>
        <a href="php\logout.php">Cerrar Sesion</a>
    </div>

</body>

</html>