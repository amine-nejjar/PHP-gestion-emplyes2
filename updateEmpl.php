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
$query="update employes set nom='".$_POST["nom"]."', prenom='".$_POST["prenom"]."', sexe='".$_POST["sexe"]."', date_naissance='".$_POST["date_naissance"]."', address='".$_POST["address"]."', id_service=".$_POST["id_service"]." where id=".$_POST["id"];
mysqli_query($conn,$query);
?>
<script language="JavaScript" type="text/JavaScript">
alert("Les données ont été modifiées avec succes");
window.location.href="allempls.php";
</script>