
<div class="header">
    <div class="card"><h1>New Cliënt</h1></div>
    <form action="<?= URL ?>Client/createSave" method="post">
    <p>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname">
    </p>
    <p>
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">
    </p>

    <input type="submit" value="Submit">
</form>
</div>