<?php


function getSpeciesList() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();	
}

function getspecies($speciesid) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM species WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(":species_id" => $speciesid));
	$db = null;
	return $query->fetch();
}

function createspecies() {
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	
	if (strlen($description) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO species(species_description) VALUES (:description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description));
	$db = null;
	return true;
}

function deletespecies($speciesid = null) {
		if (!$speciesid) {
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "DELETE FROM species WHERE species_id = :species_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_id' => $speciesid));
	$db = null;
	return true;
}

function editspecies($speciesid = null) {
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	$speciesid = isset($_POST['speciesid']) ? $_POST['speciesid'] : null;

	if (strlen($description) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :species_description WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_description' => $description,
		':species_id' => $speciesid));
	$db = null;
	return true;
}