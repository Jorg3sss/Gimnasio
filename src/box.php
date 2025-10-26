<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Box</title>
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
        <p>Clases de <span>Box</span></p>
    </div>

    <div class="barra"></div>

    <div class="container">
        <div class="banner">
            <img src="../img/box1.jpg" alt="">
        </div>

        <div class="info">
            <p>Aprende técnica, velocidad y potencia con nuestras clases de Box. Entrena cuerpo y mente en sesiones dinámicas que mejoran tu resistencia, reflejos y coordinación. Ideal tanto para principiantes como para quienes buscan rendimiento físico total.</p>
        </div>

        <div class="name-couch">
            <p>Coach <span>Carlos</span></p>
        </div>

        <div class="imagen2">
            <img src="../img/coach-box.jpg" alt="coach">
        </div>

        <div class="info-couch">
            <p>Carlos es exboxeador profesional con más de 10 años de experiencia. Sus clases combinan técnica, disciplina y motivación. Su objetivo es ayudarte a liberar estrés, ganar confianza y mejorar tu condición física a través del boxeo.</p>
        </div>

        <div class="icons">
            <div class="duración">
                <img src="../img/reloj-arena.png" alt="duración">
                <p>Duración</p>
                <p>1 hora 30 minutos</p>
            </div>
            <div class="intensidad">
                <img src="../img/bateria.png" alt="">
                <p>Intensidad</p>
                <p>Alta</p>
            </div>
        </div>

        <div class="fotos">
            <img src="../img/imagen6.jpg" alt="ejemplo1">
            <img src="../img/imagen6.jpg" alt="ejemplo2">
            <img src="../img/imagen6.jpg" alt="ejemplo3">
        </div>

        <div class="horario">
            <div class="reloj">
                <img src="../img/reloj.png" alt="">
            </div>
            <p>Lunes a viernes 19:00 - 20:30</p>
            <p>Sábados 11:00 - 12:30</p>
        </div>

        <div class="Apuntar">
            <button type="button">Apuntar a clases</button>
        </div>
    </div>
</body>
</html>
