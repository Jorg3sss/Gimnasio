<?php 
session_start();
require_once "../database/conexion.php";

$id = $_SESSION["id"];

try{
    
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    
    if($stmt->execute([$id])){
        session_unset();
        session_destroy();
        echo "<p>Usuario eliminado con éxito</p>";
        echo "<a href='../index.php'>volver</a>";
    }


}
catch(PDOException $e){
    echo "Error en la base de datos: " . $e->getMessage();
    echo "<a href='../index.php'>volver</a>";
    exit();

}
?>