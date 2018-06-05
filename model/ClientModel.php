<?php

function getallclients() {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute(array());
	$db = null;
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getclient($clientid) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM clients WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(":client_id" => $clientid));
	$db = null;
	return $query->fetch();
}

function createclient() {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;

	
	if (strlen($firstname) == 0 || strlen($lastname) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO clients(client_firstname, client_lastname) VALUES (:firstname, :lastname)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname));
	$db = null;
	return render('client/index');
	return true;
}

function deleteclient($clientid = null) {
		if (!$clientid) {
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "DELETE FROM clients WHERE client_id = :client_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_id' => $clientid));
	$db = null;
	return render('client/index');
	return true;
}

function editclient($clientid = null) {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$clientid = isset($_POST['clientid']) ? $_POST['clientid'] : null;

	if (strlen($firstname) == 0 && strlen($lastname) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname' => $firstname,
		':client_lastname' => $lastname,
		':client_id' => $clientid));
	$db = null;
	return true;
}