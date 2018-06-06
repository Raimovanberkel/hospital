<?php

require(ROOT . "/model/patientModel.php");
require(ROOT . "/model/ClientModel.php");
require(ROOT . "/model/SpeciesModel.php");

// http://localhost/Hospital/patient/index
function index() {
	return render('patient/index', ['patientslist'=>getAllPatients()]);
}

function create() {
	render("patient/create", 
		[
			'specieslist' => getSpeciesList(),
			'clientlist' => getallclients()
		]
	);

}

function createSave() {
	if (!createpatient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'patient/index');
}

function delete($patientid) {
	if (!deletepatient($patientid)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}

function edit($patientid) {
	render("patient/edit", array(
		'patient' => getpatient($patientid),
		'specieslist' => getSpeciesList(),
		'clientlist' => getallclients()
		));
}

function editSave($patientid) {
	if (!editpatient($patientid)) {
		header('location:' . URL . 'error/index');
	}
	header('location:' . URL . 'patient/index');
} 

?>