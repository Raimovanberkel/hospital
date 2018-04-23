<?php

	$connection = new mysqli('localhost','root','','hospital');
	

	$sql = "SELECT * FROM clients";
	

	$result = $connection->query($sql);
	

	$clientslist = $result->fetch_all(MYSQLI_ASSOC);
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

<h2>Cliënts</h2>

	<table>
		<thead>
			<tr>

				<th>Firstname</th>
				<th>Lastname</th>

				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php 

	foreach($clientslist as $client){
?>
	<tr>
		<td><?php echo $client['client_firstname']; ?></td>
		<td><?php echo $client['client_lastname']; ?></td>
		<td class="center"><a href="#">edit</a></td>
		<td class="center"><a href="delete.php">delete</a></td>
	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href= "create"> + Create</a></p>

</body>
</html>