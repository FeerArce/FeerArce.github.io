<?php

//codigo base: dir_busca_procesa.php

$servername = "localhost";
$username = "usuario";
$password = "password";
$dbname = "directorio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$stmt = $conn->prepare("SELECT  usuario, password FROM usuarios WHERE usuario=?");
$stmt->bind_param("s", $usuario_env);

$usuario_env = $_POST["usuario"];
$password_env = $_POST["password"];

$stmt->execute();
$result = $stmt -> get_result();

if($row = $result->fetch_assoc())
{
	if($row["password"] == $password_env)
	{
		session_start();
		$_SESSION["usuario"] = $usuario_env;
		header("Location: dir_consulta.php");
	}
	else
	{
		header("Location: login.php");
		exit();
	}

}
else
{
	header("Location: login.php");
	exit();
}
?>