<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Yoga</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="src/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
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
            <p>Clases de <span>yoga</span></p>
        </div>

        <div class="barra"></div>

        <div class="container">
            <div class="banner">
                <img src="../img/imagen8.jpg" alt="">
            </div>
            <div class="info">
                <p>En FitLife, entendemos que la verdadera salud es la unión de cuerpo y mente. Por eso, te invitamos a nuestras clases de Yoga. Complementa tu rutina de gimnasio ganando la flexibilidad que previene lesiones, fortalece tu músculo estabilizador y mejora tu postura. Con cada respiración consciente, reducirás el estrés, aumentarás tu concentración y saldrás de la sala con una energía renovada.</p>
            </div>
            <div class="name-couch">
                <p>Coach <span>Ana</span></p>
            </div>
            <div class="imagen2">
                <img src="../img/coach2.webp" alt="coach">
            </div>
            <div class="info-couch">
                <p>En FitLife, la excelencia en el bienestar comienza con la guía adecuada. Te presentamos a Ana, nuestra certificada y apasionada instructora de Yoga. Con más de siete años dedicados a la práctica y la enseñanza, Ana te ofrece clases que van más allá de las posturas físicas. Su método se enfoca en la alineación correcta, la respiración consciente (Pranayama) y la conexión mente-cuerpo, lo que la hace ideal tanto para principiantes que buscan introducirse en la práctica, como para atletas que buscan mejorar su flexibilidad y recuperación.</p>
            </div>

            <div class="icons">
                <div class="duración">
                    <img src="../img/reloj-arena.png" alt="duración">
                    <p>Duración</p>
                    <p>1 hora y media</p>
                </div>
                <div class="intensidad">
                    <img src="../img/bateria.png" alt="">
                    <p>Intensidad</p>
                    <p>Alta</p>
                </div>
            </div>
            <div class="fotos">
                <img src="../img/imagen9.webp" alt="ejemplo1">
                <img src="../img/imagen10.jpeg" alt="ejemplo2">
                <img src="../img/imagen11.webp" alt="ejemplo3">
            </div>

            <div class="horario">
                <div class="reloj">
                    <img src="../img/reloj.png" alt="">
                </div>
                <p>Lunes a viernes 16:00-17:30</p>
                <p>Sábados 12:00-13:30</p>
                <p>Domingos 8:30-10:00</p>
            </div>

            <div class="Apuntar">
                <button type="button">Apuntar a clases</button>
            </div>
        
        </div>
        


    </body>
</html>