<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "directorio";
 
// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 
// Check connection 
if (!$conn) { 
	die("Connection failed: " . mysqli_connect_error()); 
}

$stmt = $conn->prepare("SELECT nombre, correo, celular FROM dir WHERE nombre=?");
$stmt->bind_param("s", $nombre);

$nombre = $_POST["nombre"];

if($stmt->execute())
{
	//$stmt->bind_result($nombre, $correo, $celular);
	//$stmt->fetch();
	$result= $stmt->get_result();
	echo '<table border="1">';
	echo "<tr><th>Nombre</th><th>Correo</th><th>Celular</th></tr>";
	while($row = $result->fetch_assoc()) {
        //echo "nombre: " . $row["nombre"]. " - correo: " . $row["correo"]. " - celular: " . $row["celular"]. "<br>";
    	echo "<tr><td>". $row["nombre"]. "</td><td>". $row["correo"]. "</td><td>". $row["celular"]. "</td></tr>";
	}
	echo '</table>';
	
}
else
{
	echo "No existe el registro";
}
?>