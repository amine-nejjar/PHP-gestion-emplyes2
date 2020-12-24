<?php
session_start();
session_start();

$conn = mysqli_connect("localhost", "root", "", "grh");
if (!$conn) {
echo 'connection de base données echoué';
die('ERROR: Unable to connect: ' . mysqli_error());
}
$query="select * from users where login like '".$_POST["login"]."' and password like '".$_POST["password"]."'";
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
if($row){
	$_SESSION["login"]=$row["login"];
	$_SESSION["type"]=$row["type"];
	header("Location: allempls.php");}
else{ 
		header("Location: indeex.php");

	}

?>