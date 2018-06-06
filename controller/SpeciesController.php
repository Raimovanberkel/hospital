<?php

require(ROOT . "/model/SpeciesModel.php");

// http://localhost/Hospital/species/index
function index() {
	return render('species/index', ['specieslist'=>getSpeciesList()]);
}

function create() {
	render("species/create");
}

function createSave() {
	if (!createspecies()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'species/index');
}

function delete($speciesid) {
	if (!deletespecies($speciesid)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "species/index");
}

function edit($speciesid) {
	render("species/edit", array(
		'species' => getspecies($speciesid)
		));
}

function editSave($speciesid) {
	if (!editspecies($speciesid)) {
		header('location:' . URL . 'error/index');
	}
	header('location:' . URL . 'species/index');
} 

?>