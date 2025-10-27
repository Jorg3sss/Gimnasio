<?php
include("database/conexion.php"); // Conexión a la base de datos

$modo = $_GET['id'] ?? 1; // 1 = login, 2 = registro
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($modo == 1) {
        // --- INICIAR SESIÓN ---
        $correo = $_POST['correo'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';

        $query = $conn->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $query->execute(['correo' => $correo]);
        $usuario = $query->fetch();

        if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
            // Guardar sesión
            session_start();
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['correo'] = $usuario['correo'];

            $mensaje = "✅ Bienvenido, acceso correcto.";
            header("refresh:2; url=index.php");
            exit();
        } else {
            $mensaje = "❌ Usuario o contraseña incorrectos.";
        }

    } else {
        // --- REGISTRARSE ---
        $nombre = $_POST['nombre'] ?? '';
        $correo = $_POST['correo'] ?? '';
        $contrasena = $_POST['contrasena'] ?? '';

        // Verificar si ya existe el correo
        $check = $conn->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $check->execute(['correo' => $correo]);

        if ($check->rowCount() > 0) {
            $mensaje = "⚠️ Ese correo ya está registrado.";
        } else {
            // Hashear la contraseña
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);

            $insert = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (:nombre, :correo, :contrasena)");
            $insert->execute([
                'nombre' => $nombre,
                'correo' => $correo,
                'contrasena' => $hash
            ]);

            $mensaje = "✅ Registro exitoso. Ahora puedes iniciar sesión.";
            header("refresh:2; url=credenciales.php?id=1");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $modo == 1 ? 'Iniciar sesión' : 'Registrarse'; ?></title>
<style>
/* Tu CSS actual */
body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f5f3fa; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
.login-container { background-color: #fff; padding: 40px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); text-align: center; width: 350px; }
h1 { color: #4B0082; margin-bottom: 20px; }
p { color: #333; margin-bottom: 25px; }
p span { color: #4B0082; font-weight: bold; }
.form-group { display: flex; flex-direction: column; align-items: flex-start; margin-bottom: 15px; }
label { color: #333; font-weight: 600; margin-bottom: 5px; }
input[type="text"], input[type="password"] { width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; transition: 0.3s; }
input[type="text"]:focus, input[type="password"]:focus { border-color: #4B0082; outline: none; }
.btn { background-color: #4B0082; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; transition: 0.3s; width: 100%; font-weight: 600; }
.btn:hover { background-color: #35006b; }
.volver { background: none; border: 1px solid #4B0082; color: #4B0082; padding: 8px 15px; border-radius: 8px; cursor: pointer; margin-bottom: 20px; transition: 0.3s; }
.volver:hover { background-color: #4B0082; color: #fff; }
.mensaje { margin-top: 15px; color: #333; font-weight: 500; }
</style>
</head>
<body>

<div class="login-container">
    <button class="volver" onclick="window.location.href='index.php'">Volver</button>

    <?php if ($modo == 1): ?>
        <h1>Iniciar sesión</h1>
        <p>Introduce tus credenciales para <span>comenzar</span></p>
        <form method="POST">
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="text" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn">Entrar</button>
        </form>
        <p><a href="credenciales.php?id=2">¿No tienes cuenta? Regístrate</a></p>

    <?php else: ?>
        <h1>Registrarse</h1>
        <p>Crea una cuenta para <span>acceder</span></p>
        <form method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="text" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit" class="btn">Registrarme</button>
        </form>
        <p><a href="credenciales.php?id=1">¿Ya tienes cuenta? Inicia sesión</a></p>
    <?php endif; ?>

    <?php if (!empty($mensaje)): ?>
        <div class="mensaje"><?= $mensaje ?></div>
    <?php endif; ?>
</div>

</body>
</html>
