<h1>Changing the information.</h1>
<div class="container">
  <form action="<?= URL ?>client/editSave" method="post">
    <input type="text" name="firstname" value="<?= $client['client_firstname'] ?>" id="firstname">
    <input type="text" name="lastname" value="<?= $client['client_lastname'] ?>" id="lastname">
     <input type="text" name="clientid" value="<?= $client['client_id'] ?>" id="clientid">
    <input type="submit" value="Submit">
  </form>
</div>