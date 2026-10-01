<?php
require_once '../modelo/conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre'], $_POST['comentario'], $_POST['rating'])) {
        $nombre = htmlspecialchars($_POST['nombre']); 
        $comentario = htmlspecialchars($_POST['comentario']);
        $rating = intval($_POST['rating']); 

        $sql = "INSERT INTO comentarios (nombre, comentario, rating) VALUES (?, ?, ?)";
        
       
        if ($stmt = $conexion->prepare($sql)) {

            $stmt->bind_param("ssi", $nombre, $comentario, $rating); 

           
            if ($stmt->execute()) {
               
                header("Location: ../vista/mostrar_comentario.php?message=Gracias por tu comentario!");
                exit();
            } else {
                echo "Error al guardar el comentario: " . $stmt->error;
            }

            
            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conexion->error;
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Método no permitido.";
}
?>