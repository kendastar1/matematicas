<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en otro lugar
$username = "root";
$password = "";
$dbname = "registro";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>