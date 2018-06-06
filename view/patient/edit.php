
<h1>Edit patient</h1>
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
					$selectedclients = $patient['client_id'];
					foreach($clientlist as $clients):
						$selected = ($selectedclients == $clients['client_id'] ? "selected" : "");
						$id = $clients['client_id'];
				?>
					<option <?= $selected ?> value="<?= $id ?>"> <?php echo $clients['client_firstname'] . ' ' . $clients['client_lastname'] ?> </option>
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
