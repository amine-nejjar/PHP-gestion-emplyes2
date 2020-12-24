<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: indeex.php");
}?>
<html>
<body>
	<center>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<strong>
	<a href="formAddEmpl.php"> Ajouter un employe </a><br/>
	<a href="allEmpls.php"> afficher tous les employes </a><br/></strong>
</center>
	</body>
</html>
