<?php 
session_start();
require_once "../database/conexion.php";

if($_SERVER["REQUEST_METHOD"]== "POST" ){
    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $dia = trim($_POST["dia"]);
    $mes = trim($_POST["mes"]);
    $año = trim($_POST["año"]);
    $tel = trim($_POST["telefono"]);
    $correo = $_POST["correo"];
    $contra1 = $_POST["contra1"];
    $contra2 = $_POST["contra2"];

    $correo_limpio = trim($correo);
    $contra1_limpia = trim($contra1);
    $contra2_limpia = trim($contra2);

    if($nombre == ""   || $apellido == "" ){
        $_SESSION["error"] = "completa todos los campos";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    if($dia == ""   || $mes == "" || $año == "" ){
        $_SESSION["error"] = "completa todos los campos";
        header("Location: ../credenciales.php?id=2");
        exit();
    }


    if($correo_limpio == ""   || $contra1 == "" || $contra2 == "" || $tel == ""){
        $_SESSION["error"] = "completa todos los campos";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    if(filter_var($dia, FILTER_VALIDATE_INT) == false || filter_var($mes, FILTER_VALIDATE_INT) == false || filter_var($año, FILTER_VALIDATE_INT) == false){
        $_SESSION["error"] = "Los campos de fecha deben ser llenados por números";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    if(filter_var($tel, FILTER_VALIDATE_INT) == false){
        $_SESSION["error"] = "El campo teléfono debe ser llenado por números";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    if(strlen($año) < 4){
        $_SESSION["error"] = "El año debe ser de 4 dígitos";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    if($contra1 !== $contra2){
        $_SESSION["error"] = "Las contraseñas no coinciden";
        header("Location: ../credenciales.php?id=2");
        exit();
    }

    try{
        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE correo = ?");
        $stmt->execute([$correo]);
        $resultado = $stmt->fetchColumn();

        if($resultado > 0){
            $_SESSION["error"] = "El correo ya ha sido asociado a otra cuenta";
            header("Location: ../credenciales.php?id=2");
            exit();
        }

        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE telefono = ?");
        $stmt->execute([$tel]);
        $resultado = $stmt->fetchColumn();

        if($resultado > 0){
            $_SESSION["error"] = "El teléfono ya ha sido asociado a otra cuenta";
            header("Location: ../credenciales.php?id=2");
            exit();
        }

        $fecha = $dia . "-" . $mes . "-" . $año;
        $contra = password_hash($contra1, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, fechan, telefono, correo, contraseña) VALUES (?, ?, ?, ?, ?, ?)" );

        if($stmt->execute([$nombre, $apellido, $fecha, $tel, $correo, $contra])){
            $id = $conn->lastInsertId();

            echo "<p>Usuario creado con éxito</p>";
            echo "<a href='../index.php'>volver</a>";

            $_SESSION["id"] = $id;
        }
    }

    catch(PDOException $e){
        $_SESSION["error"] = "Error en la base de datos: " . $e->getMessage();
        header("Location: ../credenciales.php?id=2");
        exit();
    }
    
}

?>