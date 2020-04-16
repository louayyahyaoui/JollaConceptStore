<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script></head>

</html>
<?PHP
include "../core/promoC.php";
$promo1C=new PromoC();
$listePromo=$promo1C->afficherpromos();

//var_dump($listePromo->fetchAll());
?>

<table class="table table-hover">
			<thead>
			  <tr>
				<th  style="width: 20%">ID</th>
				<th>Nom</th>
				 <th>date_debut</th>
                 <th>date_fin</th>
                 <th>Prix_nouveau</th>
				 <th style="width: 20%">Description</th>                 
                 <th>supprimer</th>
                 <th>modifier</th>
                 


				</tr>
			</thead>
<?PHP
foreach($listePromo as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['date_debut']; ?></td>
	<td><?PHP echo $row['date_fin']; ?></td>
	<td><?PHP echo $row['prix_nouveau']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
  <!--  <td><img width="80" src="images/<?php echo $row['image']?>" alt="<?php echo $row['image'] ?>"></td> -->
	<td><form method="POST" action="supprimePromo.php">
	<input type="submit" name="supprimer" value="supprimer" class="btn btn-danger btn-block">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a class="btn btn-success btn-block" href="modifiePromo.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


