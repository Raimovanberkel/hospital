
	<div class="header">
	<div class="card"><h1>New patiënt</h1></div>
	<form action="<?= URL ?>patient/createSave" method="post">

		<div>
			<label for="name">Name:	</label>
			<input type="text" id="name" name="name">
		</div>
		<div>



			<label for="species">species:</label>	
			<select name="species">
				<?php
					foreach($specieslist as $species):
				?>
					<option value= "<?php echo $species['species_id']; ?>">  <?php echo $species['species_description'] ?> </option>
				<?php
					endforeach;
				?>
			</select>	<br>

			<label for="client">Clients:</label>	
			<select name="client" >
				<?php
					foreach($clientlist as $clients):
				?>
					<option value="<?php echo $clients['client_id']; ?>"> <?php echo $clients['client_firstname'] . ' ' . $clients['client_lastname'] ?> </option>
				<?php
					endforeach;
				?>
			</select><br>

		</div>
		<div>
			<label for="status">Status:	</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Submit">
		</div>
	</form>
</div>