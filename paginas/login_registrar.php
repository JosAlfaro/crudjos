<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "base2";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn)
{
	die("No hay conexio:" .mysqli_connect_error());
}

$nombre = $_POST["usuario"];
$pass = $_POST["password"];

if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$nombre' AND password = '$pass'");
	$nr = mysqli_num_rows($query);

	if($nr==1)
{
	echo "<script> alert('Bienvenido $nombre'); window.location='principal.html' </script>";
}else
{
	echo "<script> alert('Usuario no existe'); window.location='../index.html' <script>";
}
}

if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO usuarios(usuario,password) values ('$nombre','$pass')";

	if(mysqli_query($conn,$sqlgrabar))
	{
		
	echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='../index.html' <script>";
	}else
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
}
?>