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
$stmt = $conn->prepare("DELETE dir WHERE nombre =?");
$stmt->bind_param("s", $nombre);

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$celular = $_POST["celular"];

$stmt->execute();

$stmt->close();
$conn->close();

?>

<h1>Directorio Baja - Realizada</h1>
Nombre: <input type="text" name="name" value="<?php echo $nombre ?>"<br>
Email: <input type="text" name="email" value="<?php echo $email ?>"<br>
Celular: <input type="text" name="celular" value="<?php echo $celular ?>"<br>
