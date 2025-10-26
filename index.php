<?php session_start(); ?>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gimnasio</title>
        <link rel="stylesheet" href="src/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="titulo1">
            <h1>Gimnasio FitLife</h1>
        </div>

        <?php if(isset($_SESSION["id"])): ?>
            
            <a href="src/datos.php"><div class="usuario">
                <img src="img/Contacto.webp" alt="Imagen de usuario">
            </div></a>
            <?php else: ?>
                <div class="botones">
                    <button onclick="window.location='credenciales.php?id=1'">Iniciar sesión</button>
                    <button onclick="window.location='credenciales.php?id=2'">Registrarse</button>
                </div>
        <?php endif; ?>

        <div class="container">
            <div class="banner">
                <img src="img/imagen1.webp" alt="">
            </div>

            <div class="clases">
                <p>Clases variadas al estilo <span>FitLife</span></p>
            </div>
            <div class="circulos">
                <div class="imagen">
                    <a href="src/yoga.php"><img src="img/imagen2.webp" alt=""></a>
                </div>
                <div class="imagen">
                    <a href="src/spinning.php"><img src="img/imagen3.webp" alt=""></a>
                </div>
                <div class="imagen">
                    <a href="src/cross.php"><img src="img/imagen4.jpg" alt=""></a>
                </div>
                <div class="imagen">
                    <a href="src/Zumba"><img src="img/imagen5.jpg" alt=""></a>
                </div>
                <div class="imagen">
                    <a href="src/box.php"><img src="img/imagen6.jpg" alt=""></a>
                </div>
            </div>
            <div class="info">
                <p>En FitLife, no solo entrenas, ¡vives! Somos más que un gimnasio; somos una comunidad dedicada a tu salud, tu energía y tu evolución física. Olvídate de las rutinas aburridas y descubre un mundo de posibilidades para ponerte en forma con nuestra amplia variedad de clases especializadas, diseñadas para adaptarse a todos los niveles y objetivos. Si buscas paz mental, prueba Yoga, con sesiones enfocadas en calmar la mente, mejorar la flexibilidad y fortalecer tu núcleo. Para quienes buscan quemar calorías y elevar su ritmo cardíaco, el Spinning te ofrece entrenamientos de ciclismo indoor de alta intensidad, perfectos para la resistencia cardiovascular y la quema de grasa. ¿Buscas un desafío total? El CrossFit te ayuda a desarrollar fuerza, potencia y acondicionamiento general combinando levantamiento de pesas, gimnasia y cardio en un entrenamiento funcional. Si lo que quieres es moverte y divertirte, la Zumba es la opción ideal; una fiesta de baile llena de energía al ritmo de la música latina que mejora la coordinación y la quema de calorías sin que lo sientas como un esfuerzo. Finalmente, para desarrollar velocidad, agilidad y liberar el estrés, nuestras clases de Box te permitirán aprender técnicas de golpeo mientras tonificas tu cuerpo. ¡Únete a FitLife hoy y empieza tu camino hacia una vida más fuerte, sana y feliz!</p>
            </div>
        </div>

        <div class="razon">
            <div class="texto1">
                <h1>¿Por qué FitLife?</h1>
                <p>Es momento de llevar una vida saludable. Únete a la comunidad que te ayudará a vivir más feliz y saludable.</p>
            </div>
            <div class="razones-container">
                <div class="texto2">
                    <p class="razon-titulo"><span>Acompañamiento</span></p>
                    <p>Todo nuestro staff comprometido en tu proyecto fitness.</p>
                </div>
                <div class="texto3">
                    <p class="razon-titulo"><span>entrenamiento</span></p>
                    <p>Brindamos las herramientas y planes ideales para ti.</p>
                </div>
                <div class="texto4">
                    <p class="razon-titulo"><span>Convivencia</span></p>
                    <p>Disponibles en todo momento y en todo lugar.</p>
                </div>
                <div class="texto5">
                    <p class="razon-titulo"><span>Comunidad</span></p>
                    <p>Somos la comunidad saludable mas grande del mundo.</p>
                </div>
            </div>
        </div>
        <div class="icon">
            <img src="img/imagen12.webp" alt="">
        </div>
        <div class="inscribirse">
            <button onclick="window.location='credenciales.php?id=1'">Iniciar sesión</button>
            <button onclick="window.location='credenciales.php?id=2'">Registrarse</button>
        </div>
    </body>
</html>