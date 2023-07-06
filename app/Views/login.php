<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
</head>

<body>
    <div class="contenedor">
        <form action="<?= base_url('home/login') ?>" method="post">
            <label for="nombre">Usuario</label>
            <input type="text" name="NU">
            <label for="contrasenia">Contraseña</label>
            <input type="password" name="CON">
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
