<?php
//Para registrar
include('conexion.php');

$usu 	= $_POST["txtusuario2"];
$pass 	= $_POST["txtpassword"];

$queryusuario 	= mysqli_query($Vinculacion,"SELECT * FROM capcha1 WHERE nombre = '$usu'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO capcha1(nombre,pass) values ('$usu','$pass')";
	

if(mysqli_query($Vinculacion,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usu');window.location= 'index.html' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conn);
}

}
else
{
		echo "<script> alert('No puedes registrar este usuario: $usu');window.location= 'index.html' </script>";
}
/*4amp*/
?>