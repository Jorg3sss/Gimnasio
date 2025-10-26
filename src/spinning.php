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
            <p>Clases de <span>spinning</span></p>
        </div>

        <div class="barra"></div>

        <div class="container">
            <div class="banner">
                <img src="../img/imagen13.jpg" alt="">
            </div>
            <div class="info">
                <p>¿Buscas una explosión de energía y resultados visibles? Nuestras clases de Spinning son la forma más electrizante de transformar tu físico. Pedalea al ritmo de la mejor música con la guía de nuestros instructores, en un entrenamiento de alto impacto cardiovascular y bajo impacto articular.</p>
            </div>
            <div class="name-couch">
                <p>Coach <span>Fernanda</span></p>
            </div>
            <div class="imagen2">
                <img src="../img/coach1.jpg" alt="coach">
            </div>
            <div class="info-couch">
                <p>Te presentamos a Fernanda, nuestra especialista en guiarte hacia el bienestar integral a través del Yoga. Fernanda cree firmemente que el Yoga es una herramienta para la vida diaria. Sus clases se centran en la meditación en movimiento, ayudando a los estudiantes a conectar la fuerza física con la claridad mental. Ya sea que necesites aliviar el dolor de espalda, mejorar tu flexibilidad o simplemente desconectar después de un largo día, Fernanda te proporcionará las herramientas necesarias para cultivar la calma y la resistencia en cada postura.</p>
            </div>

            <div class="icons">
                <div class="duración">
                    <img src="../img/reloj-arena.png" alt="duración">
                    <p>Duración</p>
                    <p>2 horas</p>
                </div>
                <div class="intensidad">
                    <img src="../img/bateria.png" alt="">
                    <p>Intensidad</p>
                    <p>Alta</p>
                </div>
            </div>
            <div class="fotos">
                <img src="../img/imagen14.jpg" alt="ejemplo1">
                <img src="../img/imagen15.jpg" alt="ejemplo2">
                <img src="../img/imagen16.jpg" alt="ejemplo3">
            </div>

            <div class="horario">
                <div class="reloj">
                    <img src="../img/reloj.png" alt="">
                </div>
                <p>Lunes a viernes 18:00 - 20:00</p>
                <p>Sábados 14:00 - 16:30</p>
                <p>Domingos 10:30 - 12:30</p>
            </div>

            <div class="Apuntar">
                <button type="button">Apuntar a clases</button>
            </div>
        
        </div>
        


    </body>
</html>