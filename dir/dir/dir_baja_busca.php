<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "directorio";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
  die("Connection failed:" .mysqli_connect_error());
}
$stmt=$conn->prepare("SELECT nombre,email,celular FROM dir WHERE nombre=?");
$stmt->bind_param("s",$nombre);

$nombre=$_POST["nombre"];

if($stmt->execute())
{
    $stmt->bind_result($nombre, $email, $celular);
    $stmt->fetch();

 ?>
 <form action="dir_baja_procesa.php" method="post">
   <h1>Directorio - Baja - Confirmación</h1><br>
 Nombre: <?php echo $nombre; ?><br>
 E-mail: <?php echo $email; ?><br>
 Celular: <?php echo $celular; ?><br><br>
 <input type="submit" value="Borrar"></form>
 <?php
}
else {
  echo "No existe registro";
}
  ?>
