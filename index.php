<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-eqiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>contacto</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method = "post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/name.svg" alt="nombre">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
            <img class="input-icon" src="images/email.svg" alt="apellido">
        </div>
        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
            <img class="input-icon" src="images/direction.svg" alt="email">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class="input-icon " src="images/phone.svg" alt="telefono">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="ContraseÃ±a">
            <img class="input-icon" src="images/password.svg" alt="contraseÃ±a">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>

    <?php
        include("registrar.php");
    ?>
</body>
</html>