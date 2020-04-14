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
$nombre =$_POST["nombre"];
$email =$_POST["email"];
$celular =$_POST["celular"];

$sql = "INSERT INTO MyGuests (nombre, email, celular)
VALUES ("'.$nombre'", "','", "'$correo'")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysql_close();
?>
