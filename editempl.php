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
$query="select * from employes where id=".$_POST["sub"];
$result=mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>
<html>
<br/>
<br/>
<center><h1><strong> Modifier les données de l'employé</strong></h1></center>
<br/><br/><br/><br/>
<form action="updateEmpl.php" method="post">
	<center>
	<table>
		<tr>
			<td> Nom : </td>
			<td><input type="text" name="nom" value=<?php echo $row["nom"];?> /></td>
		</tr>
		<tr>
			<td> Prenom : </td>
			<td><input type="text" name="prenom" value=<?php echo $row["prenom"];?> /></td>
		</tr>
		<tr>
			<td> Sexe : </td>
			<td><select name="sexe"><option value="F" <?php if($row["sexe"]=="F"){echo "selected";}?>>Female</option>
				<option value="M" <?php if($row["sexe"]=="M"){echo "selected";}?> >Male</option></select></td>
		</tr>
		<tr>
			<td> Address : </td>
			<td><input type="text" name="address" value=<?php echo $row["address"];?> /></td>
		</tr>
		<tr>
			<td> date de naissance : </td>
			<td><input type="date" name="date_naissance" value=<?php echo $row["date_naissance"];?> /></td>
		</tr>
		<tr>
			<td> Numéro de service : </td>
			<td><input type="text" name="id_service" value=<?php echo $row["id_service"];?> /></td>

		</tr>
	</table>
		<br/>
		<input type="hidden" name="id" value=<?php echo $_POST["sub"]?> />
	<input type="submit" value="submit" />
	<input type="reset" value="cancel" />
</center>
</form>
</html>