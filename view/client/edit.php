<h1>Changing the information.</h1>
<div class="container">

  <form action="<?= URL ?>client/editSave" method="post">
  	<label for="firstname">Firstname:</label>
    <input type="text" name="firstname" value="<?= $client['client_firstname'] ?>" id="firstname"><br>
    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" value="<?= $client['client_lastname'] ?>" id="lastname"><br>
    <label for="clientid">Client ID:</label>
   	<input type="text" name="clientid" value="<?= $client['client_id'] ?>" class="hiddenid" readonly>
    <input type="submit" value="Submit">
  </form>
</div>