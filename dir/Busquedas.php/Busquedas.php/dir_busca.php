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
	$stmt->bind_result($nombre, $correo, $celular);
	$stmt->fetch();
	//echo $nombre;
	//echo $correo;
	//echo $celular;
	
	echo "Nombre:  $nombre "."<br>" ;
	echo "Correo:  $correo" ."<br>" ; 
	echo "Celular:  $celular"."<br>" ;
	

}
else
{
	echo "No existe el registro";
}
?>
