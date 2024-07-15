<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <div class="Login-content">
    
     <a href="Login.html" class="Login-button">Login</a>

    </div>

    <form method="post" autocomplete="off">

    <div class="input-group">

    <div class="input-container">
        <input type="text" name="name" placeholder="Nombre">
        <i class="fa-solid fa-user"></i>
    </div>

    <div class="input-container">
        <input type="password" name="password" placeholder="Contraseña">
        <i class="fa-solid fa-lock"></i>
    </div>

    <div class="input-container">
        <input type="email" name="email" placeholder="Email">
        <i class="fa-solid fa-envelope"></i>
    </div>

    <div class="input-container">
        <input type="tel" name="phone" placeholder="Telefono">
        <i class="fa-solid fa-phone"></i>
    </div>

    <div class="condiciones">
    <a href="index.html">Terminos y Condiciones</a>
    </div>

    <input type="submit" name="send" class="btn" values="Enviar">

    </div>


    </form>

<?php

   include("send.php")

?>

</body>
</html>