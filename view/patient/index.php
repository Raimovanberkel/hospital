<?php
	$connection = new mysqli('localhost','root','','hospital');
	$sql = "select patient_id, patient_name, patient_status,species.species_description,clients.client_firstname,clients.client_lastname ,  Concat(Trim(client_firstname),' ',Trim(client_lastname)) as Clientname from patients
left outer join clients on patients.client_id = clients.client_id
left outer join species on patients.species_id = species.species_id
order by client_firstname asc";
	$result = $connection->query($sql);
	$patientslist = $result->fetch_all(MYSQLI_ASSOC);
?>


<h1>patiënts</h1>

	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>

				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php 
	foreach($patientslist as $patient){
?>
	<tr>
		<td><?php echo $patient['patient_name']; ?></td>
		<td><?php echo $patient['species_description']; ?></td>
		<td><?php echo $patient['patient_status']; ?></td>
		<td><?php echo $patient['Clientname']; ?></td>
		<td class="center"><a href="<?php echo URL . 'patient/edit/' . $patient['patient_id']; ?>">edit</a></td>
		<td class="center"><a href="<?php echo URL . 'patient/deletepatient/' . $patient['patient_id']; ?>">delete</a></td>

	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href= "<?= URL ?>patient/create"> + Create</a></p>
</body>
</html>