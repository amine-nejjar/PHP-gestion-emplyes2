<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: indeex.php");}?>
<html>
<span style="line-height:30px;">deconncter</span><a href="deconnexion.php"><img alt="ajouter employes" src="logout.png"  style="float:left;"
         width="30" height="30"> </a><br/>
<br/>
<center><h1><strong> liste des employes</strong></h1></center>
<br/><br/><br/><br/>
<center>
		<table border="1">
			<th align="center">numero     </th>
			<th>nom     </th>
			<th>prenom     </th>
			<th>sexe     </th>
			<th>address    </th>
			<th>date naissance    </th>
			<th>numero de service    </th>

			<?php if($_SESSION["type"]=="AD"){?>
			<th>supprimer </th>
			<th>modifier </th><?php } ?>
			

<?php


$conn = mysqli_connect("localhost", "root", "", "grh");
if (!$conn) {
echo 'connection de base données echoué';
die('ERROR: Unable to connect: ' . mysqli_error());
}
$query="select * from employes";
$result=mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) { ?>
	<tr align="center">
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['nom'];?></td>
		<td><?php echo $row['prenom'];?></td>
		<td><?php echo $row['sexe'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['date_naissance'];?></td>
		<td><?php echo $row['id_service'];?></td>
		<?php if($_SESSION["type"]=="AD"){?>
		<form action="delEmpl.php" method="post">
		<td> <button type="submit" name="sub" value=<?php echo $row['id'];?> ><img alt="supprimer employes" src="delete.png"
         width="30" height="30"> </button></td></form>
       	<form action="editempl.php" method="post">
        <td> <button type="submit" name="sub" value=<?php echo $row['id'];?> ><img alt="modifier employes" src="edit.png"
         width="30" height="30"> </button> </td></form> <?php } ?>

	</tr>
<?php } ?>
</table>
</center>
<br/><br/>
<br/>
<?php if($_SESSION["type"]=="AD"){?>

<center>Ajouter un employer <br/><a href="formAddEmpl"> <img alt="ajouter employes" src="add.png"
         width="40" height="40"> </a></center> <?php } ?>

</html>


	

