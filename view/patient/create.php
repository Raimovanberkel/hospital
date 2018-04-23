<div class="header">
	<div class="card"><h1>New patiënt</h1></div>
	<form method="post">
		<br>
		<br>
		<br>
		<div>
			<label for="name">Name:	</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="specie">Species:		</label>	
			<select name="specie">
				<?php
					foreach($species as $specie):
					var_dump($species_discription);
				?>
					<option value="<?=$species['species']?>"><?=$specie['species_discription']?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:	</label>
			<input id="status" name="status"></input>
		</div>
		<div>
			<label></label>
			<input type="submit" name='submit' value="Save">
		</div>
	</form>
</div>