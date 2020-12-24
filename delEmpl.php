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
$query="delete from employes where id=".$_POST["sub"];
mysqli_query($conn,$query);
mysqli_close($conn);
?>
<script language="JavaScript" type="text/JavaScript">
alert("L'employes selectionné est supprimé avec succes");
window.location.href="allempls.php";
</script>