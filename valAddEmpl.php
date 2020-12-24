<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: indeex.php");
}

$conn = mysqli_connect("localhost", "root", "", "grh");
if (!$conn) {
echo 'connection de base données echoué';
die('ERROR: Unable to connect: ' . mysqli_error());
}
$query="insert into employes(nom,prenom,sexe,address,date_naissance,id_service) values('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['sexe']."','".$_POST['address']."','".$_POST['date_naissace']."',".$_POST['service']." )";
mysqli_query($conn,$query);

mysqli_close($conn);
header("Location: allempls.php");
?>