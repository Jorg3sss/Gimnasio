<?php 
session_start();
$id = null;
if(isset($_GET) == "id"){
    $id = $_GET["id"];
}
?>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Credenciales</title>
        <link rel="stylesheet" href="src/style.css">
    </head>
    <body>
        <?php if($id == "1"): ?>
            <div class="titulo">
                <h1>Iniciar sesión</h1>
                <button onclick="window.location='index.php'">Volver</button>
                <p>Introduce tus credenciales para  <span>comenzar</span></p>
            </div>

            <div class="container">
                <div class="form">
                    <form action="src/login.php" method="POST">
                        <label>Correo electronico</label>
                        <input type="email" name="correo" required>
                        <label>Contraseña</label>
                        <input type="password" name="contra" required>
                        <input type="submit" value="Confirmar">
                    </form>
                </div> 
            </div>
        <?php endif; ?>

        <?php if($id == "2"): ?>
            <div class="titulo">
                <h1>Registrarse</h1>
                <button onclick="window.location='index.php'">Volver</button>
                <p>Comencemos introduciendo tus <span>datos</span></p>
            </div>

            <div class="error">
                <?php if(isset($_SESSION["error"])){
                    echo "<p>" . $_SESSION["error"] . "</p>";
                    unset($_SESSION["error"]);
                } ?>  
            </div>

            <div class="container">
                <div class="form">
                    <form action="src/registrar.php" method="POST">
                        <div class="datos">
                            <label>Nombre(s)</label>
                            <input type="text" name="nombre" maxlength="50" required>
                            <label>Apellidos</label>
                            <input type="text" name="apellido" maxlength="50" required>
                            <div class="fecha">
                                <label>Fecha de nacimiento</label>
                                <div class="dias">
                                    <label>Dia</label>
                                    <label>Mes</label>
                                    <label>Año</label>

                                    <input type="text" maxlength="2" name="dia" required>
                                    <input type="text" maxlength="2" name="mes" required>
                                    <input type="text" maxlength="4" name="año" required>
                                </div>
                            </div>
                            <label>Teléfono</label>
                            <input type="text" maxlength="10" name="telefono" required>
                            <label>Correo electronico</label>
                            <input type="email" name="correo" maxlength="100" required>
                            <label>Contraseña</label>
                            <input type="password" name="contra1" maxlength="50" required>
                            <label>Confirmar contraseña</label>
                            <input type="password" name="contra2" maxlength="50" required>
                            <input type="submit" value="Confirmar">
                            </div>
                    </form>
                </div> 
            </div>
        <?php endif; ?>

    </body>
</html>