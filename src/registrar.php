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
}

?>