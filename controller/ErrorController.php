<?php

function index(){
echo "<h1>ERROR</h1><br><br>Werkt niet!<br>";
if(isset($_SESSION['errors'])) var_dump($_SESSION['errors']);
}

?>	