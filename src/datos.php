<?php 
session_start();
require_once "../database/conexion.php";

if(!isset($_SESSION["id"])){
    echo "<p>Error al encontrar al usuario, vuelva a iniciar sesión</p>";
    echo "<a href='../index.php'>Volver</a>";
    exit();
}

$id = $_SESSION["id"];

try {   
    $stmt = $conn->prepare("SELECT nombre, apellido, fechan, telefono, correo FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$usuario){
        echo "<p>Error al encontrar al usuario, vuelva a iniciar sesión</p>";
        echo "<a href='../index.php'>Volver</a>";
        exit();
    }
}
catch(PDOException $e){
    echo "<p>Error en la base de datos</p>" . $e->getMessage();
    echo "<a href='../index.php'>Volver</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Usuario</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            width: 400px;
            padding: 30px;
            text-align: center;
            animation: fadeIn 0.8s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(15px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .imagen-usuario img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #74b9ff;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #2d3436;
        }

        .info {
            text-align: left;
            margin-bottom: 20px;
        }

        .campo {
            margin-bottom: 12px;
            padding: 10px;
            background: #f1f2f6;
            border-radius: 10px;
        }

        .campo strong {
            display: block;
            color: #0984e3;
            margin-bottom: 4px;
        }

        .campo span {
            color: #2d3436;
        }

        .botones {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        button {
            flex: 1;
            border: none;
            border-radius: 10px;
            padding: 10px;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .logout {
            background-color: #dfe6e9;
            color: #2d3436;
        }

        .logout:hover {
            background-color: #b2bec3;
        }

        .eliminar {
            background-color: #d63031;
            color: white;
        }

        .eliminar:hover {
            background-color: #c0392b;
        }

    </style>
</head>
<body>
    <div class="card">
        <div class="imagen-usuario">
            <img src="../img/Contacto.webp" alt="Usuario">
        </div>

        <h2>Datos del Usuario</h2>

        <div class="info">
            <div class="campo">
                <strong>Nombre(s)</strong>
                <span><?php echo htmlspecialchars($usuario["nombre"]); ?></span>
            </div>

            <div class="campo">
                <strong>Apellidos</strong>
                <span><?php echo htmlspecialchars($usuario["apellido"]); ?></span>
            </div>

            <div class="campo">
                <strong>Fecha de nacimiento</strong>
                <span><?php echo htmlspecialchars($usuario["fechan"]); ?></span>
            </div>

            <div class="campo">
                <strong>Teléfono</strong>
                <span><?php echo htmlspecialchars($usuario["telefono"]); ?></span>
            </div>

            <div class="campo">
                <strong>Correo electrónico</strong>
                <span><?php echo htmlspecialchars($usuario["correo"]); ?></span>
            </div>
        </div>

        <div class="botones">
            <button class="logout" onclick="window.location='logout.php'">Cerrar sesión</button>
            <button class="eliminar" onclick="if(confirm('¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.')) window.location='eliminar.php';">Eliminar usuario</button>
        </div>
    </div>
</body>
</html>
