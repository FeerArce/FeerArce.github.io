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
$stmt = $conn->prepare("SELECT nombre, email, email from dir");
//$stmt->bind_param("ssi", $nombre, $email, $celular);

//$nombre = $_POST["nombre"];
//$email = $_POST["email"];
//$celular = $_POST["celular"];

$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0)
{
  echo '<table border="1">';
  echo "<tr><th>Nombre</th><th>Email</th><th>Celular</th>";
  while($row = $result->fetch_assoc()) {
      echo "<tr><td>"  . $row["nombre"]. "</td><td>" . $row["email"]. "</td><td>" . $row["celular"]. "</td></tr>";
  }
  echo'</table>';
}// if
else {
  echo 'No hay registros';
}

$stmt->close();
$conn->close();

?>
