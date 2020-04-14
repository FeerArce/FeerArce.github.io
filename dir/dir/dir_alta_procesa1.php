<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "directorio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO dir (nombre, email, email) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $nombre, $email, $celular);

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];

$stmt->execute();

$stmt->close();
$conn->close();

?>

<h1>Directorio Alta</h1>
Nombre: <?php echo $_POST["nombre"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Celular: <?php echo $_POST["celular"]; ?><br>
