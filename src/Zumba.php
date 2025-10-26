<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Zumba</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito+Sans:wght@200..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="titulo1"></div>

    <?php if(isset($_SESSION["id"])): ?>
        <a href="datos.php"><div class="usuario">
            <img src="../img/Contacto.webp" alt="Imagen de usuario">
        </div></a>
    <?php else: ?>
        <div class="no-usuario">
            <p>Aún no inicias sesión</p>
        </div>
    <?php endif; ?>

    <div class="volver">
        <button onclick="window.location='../index.php'">Volver</button>
    </div>

    <div class="titulo2">
        <p>Clases de <span>Zumba</span></p>
    </div>

    <div class="barra"></div>

    <div class="container">
        <div class="banner">
            <img src="../img/zumba1.jpg" alt="">
        </div>

        <div class="info">
            <p>Diviértete mientras entrenas con nuestras clases de Zumba. Combina movimientos de baile con rutinas de cardio que mejoran tu resistencia, queman calorías y te llenan de energía positiva. ¡Ideal para todos los niveles!</p>
        </div>

        <div class="name-couch">
            <p>Coach <span>Mariana</span></p>
        </div>

        <div class="imagen2">
            <img src="../img/coach-zumba.jpg" alt="coach">
        </div>

        <div class="info-couch">
            <p>Mariana es instructora certificada en Zumba Fitness. Su pasión por el baile y la música latina hace que cada clase sea una fiesta. Su enfoque es ayudarte a mejorar tu coordinación y confianza, mientras disfrutas de cada ritmo.</p>
        </div>

        <div class="icons">
            <div class="duración">
                <img src="../img/reloj-arena.png" alt="duración">
                <p>Duración</p>
                <p>1 hora</p>
            </div>
            <div class="intensidad">
                <img src="../img/bateria.png" alt="">
                <p>Intensidad</p>
                <p>Media</p>
            </div>
        </div>

        <div class="fotos">
            <img src="../img/imagen5.jpg" alt="ejemplo1">
            <img src="../img/imagen5.jpg" alt="ejemplo2">
            <img src="../img/imagen5.jpg" alt="ejemplo3">
        </div>

        <div class="horario">
            <div class="reloj">
                <img src="../img/reloj.png" alt="">
            </div>
            <p>Lunes a viernes 17:00 - 18:00</p>
            <p>Sábados 12:00 - 13:00</p>
        </div>

        <div class="Apuntar">
            <button type="button">Apuntar a clases</button>
        </div>
    </div>
</body>
</html>
