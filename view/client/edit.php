<h1>Changing the information.</h1>
<div class="container">
  <form action="<?= URL ?>client/editSave" method="post">
    <input type="text" name="client_firstname" value="<?= $client['firstname'] ?>">
    <input type="text" name="client_lastname" value="<?= $client['lastname'] ?>">
    <input type="submit" value="Submit">
  </form>
</div>