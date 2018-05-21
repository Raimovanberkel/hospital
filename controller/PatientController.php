<?php

require(ROOT . "/model/patientModel.php");

// http://localhost/Hospital/patient/index
function index() {
	return render('patient/index');
}

function create() {
	render("patient/create");
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
		'patient' => getpatient($patientid)
		));
}

function editSave($patientid) {
	if (!editpatient($patientid)) {
		header('location:' . URL . 'error/index');
	}
	header('location:' . URL . 'patient/index');
} 

?>