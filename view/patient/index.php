<?php

	$connection = new mysqli('localhost','root','','hospital');
	

	$sql = "SELECT * FROM patients";
	

	$result = $connection->query($sql);
	

	$patientslist = $result->fetch_all(MYSQLI_ASSOC);
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

<h2>patiënts</h2>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Status</th>

				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php 

	foreach($patientslist as $patient){
?>
	<tr>
		<td><?php echo $patient['patient_name']; ?></td>
		<td><?php echo $patient['patient_status']; ?></td>
		<td class="center"><a href="#">edit</a></td>
		<td class="center"><a href="delete.php">delete</a></td>
	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href="create" style="font-size: 23px;">Create</a></p>

</body>
</html>