<h1>Changing the information.</h1>
<div class="container">

  <form action="<?= URL ?>patient/editSave" method="post">
  	<label for="patient_name">description:</label>
  	<input type="text" name="patient_name" value="<?= $patient['patient_name'] ?>" id="patient_name"><br>
    <label for="patientid">patient ID:</label>
   	<input type="text" name="patientid" value="<?= $patient['patient_id'] ?>" id="clientid" readonly>
    <input type="submit" value="Submit">
  </form>
</div>