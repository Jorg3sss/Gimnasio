<?php 
session_start();
require_once "../database/conexion.php";

if(!isset($_SESSION["id"])){
    echo "<p>Error al encontrar al usuario, vuelva a iniciar sesión</p>";
    echo "<a href='../index.php'>volver</a>";
    exit();
}

$id = $_SESSION["id"];

try{   
    $stmt = $conn->prepare("SELECT nombre, apellido, fechan, telefono, correo FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);

    $usuario = $stmt->fetch();

    if(!$usuario){
        echo "<p>Error al encontrar al usuario, vuelva a iniciar sesión</p>";
        echo "<a href='../index.php'>volver</a>";
        exit();
        }

}
catch(PDOException $e){
    echo "<p>Error en la base de datos</p>" . $e->getMessage();
    echo "<a href='../index.php'>volver</a>";
    exit();

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Datos</title>
    </head>
    <body>
        <div class="imagen-usuario">
            <img src="../img/Contacto.webp" alt="">
        </div>
        <div class="container">
            <div class="nombre">
                <p>Nombre(s)</p>
                <p><?php echo $usuario["nombre"] ?></p>
            </div>
            <div class="apellido">
                <p>Apellidos</p>
                <p><?php echo $usuario["apellido"] ?></p>
            </div>
            <div class="fecha">
                <p>Fecha de nacimiento</p>
                <p><?php echo $usuario["fechan"] ?></p>
            </div>
            <div class="telefono">
                <p>Teléfono</p>
                <p><?php echo $usuario["telefono"] ?></p>
            </div>
            <div class="correo">
                <p>Nombre</p>
                <p><?php echo $usuario["correo"] ?></p>
            </div>

            <div class="eliminar">
                <button onclick ="window.location='logout.php'">Cerrar sesión</button>
                <button onclick="if(confirm('¿Estás seguro de que quieres eliminar este contacto? Esta acción es irreversible.')){ window.location='eliminar.php'; }">Eliminar usuario</button>
            </div>
        </div>
    </body>
</html>