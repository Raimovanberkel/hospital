
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
		<td class="center"><a href="<?php echo URL . 'patient/delete/' . $patient['patient_id']; ?>">delete</a></td>

	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href= "<?= URL ?>patient/create"> + Create</a></p>
</body>
</html>