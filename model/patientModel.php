<?php

function getpatient($patientid) {
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(":patient_id" => $patientid));
	$db = null;
	return $query->fetch();
}

function createpatient() {
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$client = isset($_POST['client']) ? $_POST['client'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	
	if (strlen($status) == 0 || strlen($client) == 0 || strlen($species) == 0 || strlen($name) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "INSERT INTO patients (patient_name, client_id, species_id, patient_status) VALUES (:patient_name, :client_id, :species_id, :patient_status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $name,
		':client_id' => $client,
		':species_id' => $species,
		':patient_status' => $status));
	$db = null;
	return render('patient/index');
	return true;
}

function deletepatient($patientid = null) {
		if (!$patientid) {
		return false;
	}
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE patient_id = :patient_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_id' => $patientid));
	$db = null;
	return render('patient/index');
	return true;
}

function editpatient($patientid = null) {
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$patientid = isset($_POST['patientid']) ? $_POST['patientid'] : null;
	$speciesid = isset($_POST['species']) ? $_POST['species'] : null;
	$clientid = isset($_POST['client']) ? $_POST['client'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;


	if (strlen($patient_name) == 0 || strlen($patientid) == 0 ||strlen($speciesid) == 0 ||strlen($clientid) == 0 ||strlen($status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name , species_id = :species_id, client_id = :client_id, patient_status = :patient_status WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $speciesid,
		':client_id' => $clientid,
		':patient_status' => $status,
		':patient_id' => $patientid));
	$db = null;
	return true;
}