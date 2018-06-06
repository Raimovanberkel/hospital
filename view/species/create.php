
<div class="header">
    <div class="card"><h1>New Species</h1></div>
    <form action="<?= URL ?>species/createSave" method="post">
    <p>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description">
    </p>
    <input type="submit" value="Submit">
</form>
</div>