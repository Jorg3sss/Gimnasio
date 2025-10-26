<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crossfit</title>
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
        <p>Clases de <span>Crossfit</span></p>
    </div>

    <div class="barra"></div>

    <div class="container">
        <div class="banner">
            <img src="../img/crossfit1.jpg" alt="">
        </div>

        <div class="info">
            <p>El Crossfit es una disciplina de alta intensidad que combina fuerza, resistencia y técnica. Nuestras clases te desafiarán con circuitos funcionales que pondrán a prueba todo tu cuerpo, guiados por entrenadores certificados y en un ambiente motivador.</p>
        </div>

        <div class="name-couch">
            <p>Coach <span>Eduardo</span></p>
        </div>

        <div class="imagen2">
            <img src="../img/coach-crossfit.jpg" alt="coach">
        </div>

        <div class="info-couch">
            <p>Eduardo es un apasionado del entrenamiento funcional. Con más de 5 años de experiencia, se especializa en ayudarte a superar tus límites físicos y mentales. Su metodología se enfoca en el progreso individual y la técnica correcta para maximizar tus resultados y evitar lesiones.</p>
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
                <p>Muy alta</p>
            </div>
        </div>

        <div class="fotos">
            <img src="../img/imagen4.jpg" alt="ejemplo1">
            <img src="../img/imagen4.jpg" alt="ejemplo2">
            <img src="../img/imagen4.jpg" alt="ejemplo3">
        </div>

        <div class="horario">
            <div class="reloj">
                <img src="../img/reloj.png" alt="">
            </div>
            <p>Lunes a viernes 7:00 - 8:00 y 19:00 - 20:00</p>
            <p>Sábados 10:00 - 11:00</p>
        </div>

        <div class="Apuntar">
            <button type="button">Apuntar a clases</button>
        </div>
    </div>
</body>
</html>
