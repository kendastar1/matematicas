<?php
// Incluye el archivo de conexión a la base de datos
require_once 'conexion.php';

// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Prepara la sentencia SQL
$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

// Ejecuta la sentencia SQL y verifica si fue exitosa
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registro exitoso');</script>";
} else {
  echo "Error al registrar usuario: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>