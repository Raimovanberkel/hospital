<?php

require(ROOT . "/model/ClientModel.php");

// http://localhost/Hospital/client/index
function index() {
	return render('client/index');
}

function create() {
	render("client/create");
}

function createSave() {
	if (!createClient()) {
		header('Location:' . URL . 'error/index');
		exit();
	}
	header('Location:' . URL . 'client/index');
}

function delete($clientid) {
	if (!deleteclient($clientid)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}

function edit($clientid) {
	render("client/edit", array(
		'client' => getclient($clientid)
		));
}

function editSave() {
	if (!editclient()) {
		header('location:' . URL . 'error/index');
		exit();
	}
	header('location:' . URL . 'client/index');
} 

?>