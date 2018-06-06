
<h1>Species</h1>

	<table>
		<thead>
			<tr>
				<th>Description</th>

				<th colspan="2">Action</th>
			</tr>
		</thead>
<?php 
	foreach($specieslist as $species){
?>
	<tr>
		<td><?php echo $species['species_description']; ?></td>
		<td class="center"><a href="<?php echo URL . 'species/edit/' . $species['species_id']; ?>">edit</a></td>
		<td class="center"><a href=" <?php echo URL . 'species/delete/' . $species['species_id']; ?>">delete</a></td>
	</tr>
<?php																			
	}
?>
	</table>
			<p class="options"><a href= "<?= URL ?>species/create"> + Create</a></p>

</body>
</html>