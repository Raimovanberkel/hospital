<?php

	$connection = new mysqli('localhost','root','','hospital');
	

	$sql = "SELECT * FROM clients";
	

	$result = $connection->query($sql);
	

	$clientslist = $result->fetch_all(MYSQLI_ASSOC);
?>
<h1>clients</h1>

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
		<td class="center"><a href="<?php echo URL . 'client/edit/' . $client['client_id']; ?>">edit</a></td>
		<td class="center"><a href=" <?php echo URL . 'client/deleteclient/' . $client['client_id']; ?>">delete</a></td>
	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href= "<?= URL ?>client/create"> + Create</a></p>

</body>
</html>