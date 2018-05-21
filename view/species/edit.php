<h1>Changing the information.</h1>
<div class="container">

  <form action="<?= URL ?>species/editSave" method="post">
  	<label for="description">description:</label>
    <input type="text" name="description" value="<?= $species['species_description'] ?>" id="description"><br>

    <label for="speciesid">species ID:</label>
   	<input type="text" name="speciesid" value="<?= $species['species_id'] ?>" id="clientid" readonly>
    <input type="submit" value="Submit">
  </form>
</div>