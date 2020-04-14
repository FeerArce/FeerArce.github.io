<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "directorio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nombre, email, celular FROM dir";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<table border="1">';
    echo "<tr><th>Nombre</th><th>Email</th><th>Celular</th>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>"  . $row["nombre"]. "</td><td>" . $row["email"]. "</td><td>" . $row["celular"]. "</td></tr>";
    }
    echo'</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
