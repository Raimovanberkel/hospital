
<?php $connection = new mysqli('localhost','root','','hospital');
	$sql = "SELECT * FROM species";
	$result = $connection->query($sql);
	$specieslist = $result->fetch_all(MYSQLI_ASSOC);

	$sql2 = "select *,  Concat(Trim(client_firstname),' ',Trim(client_lastname)) as Clientname from clients order by client_firstname asc;";
	$result2 = $connection->query($sql2);
	$clientlist = $result2->fetch_all(MYSQLI_ASSOC);
	?>

<h1>Changing the information.</h1>
<div class="container">

  <form action="<?= URL ?>patient/editSave" method="post">
  	<label for="patient_name">Name:</label>
  	<input type="text" name="patient_name" value="<?= $patient['patient_name'] ?>" id="patient_name"><br>

  			<label for="species">Species</label>
			<select name="species" value="<?= $patient['species_id'] ?>">
				<?php
					$selectedspecies = $patient['species_id'];

					foreach($specieslist as $species):
				?>
					<option <?php if ($selectedspecies == $species['species_id']) {echo ("selected");} ?> value="<?php echo $species['species_id']; ?>">  <?php echo $species['species_description'] ?> </option>
				<?php
					endforeach;
				?>
			</select>	<br>

			<label for="client">Clients:</label>	
			<select name="client" value="<?= $patient['client_id'] ?>">
				<?php
					$selectedclient = $patient['client_id'];
					foreach($clientlist as $clients):
				?>
					<option  <?php if ($selectedclient == $clients['client_id']) {echo ("selected");} ?> value="<?php echo $clients['client_id']; ?>"> <?php echo $clients['Clientname'] ?> </option>
				<?php
					endforeach;
				?>
			</select><br>

		</div>
		<div>
			<label for="status">Status:	</label>
			<input id="status" name="status" value="<?= $patient['patient_status'] ?>"></input>
		</div>
		<div>
	  
	<label for="patientid">patient ID:</label>
   	<input type="text" name="patientid" value="<?= $patient['patient_id'] ?>" class="hiddenid" readonly>
    <input type="submit" value="Submit">
  </form>
</div>
