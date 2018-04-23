<?php

	$connection = new mysqli('localhost','root','','hospital');
	

	$sql = "SELECT * FROM species";
	

	$result = $connection->query($sql);
	

	$specieslist = $result->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
		<h1><a href="http://localhost/Hospital/">Hospital</a></h1>
	<ul>
		<li><a href="http://localhost/Hospital/view/patient/index.php">Patiënts</a></li>
		<li><a href="http://localhost/Hospital/view/client/index.php">Clients</a></li>
		<li><a href="http://localhost/Hospital/view/species/index.php">Species</a></li>
	</ul>

<h2>Species</h2>

	<table>
		<thead>
			<tr>
				<th>Discription</th>

				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php 

	foreach($specieslist as $species){
?>
	<tr>
		<td><?php echo $species['species_description']; ?></td>
		<td class="center"><a href="#">edit</a></td>
		<td class="center"><a href="#">delete</a></td>
	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>

</body>
</html>