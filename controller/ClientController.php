<?php

require(ROOT . "/model/ClientModel.php");

// http://localhost/Hospital/client/index
function index() {
	return render('client/index', ['clients'=>getallclients()]); 
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
	$result = deleteclient($clientid);
	if ($result == false) {
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

function editSave($clientid) {
	if (!editclient($clientid)) {
		header('location:' . URL . 'error/index');
	}
	header('location:' . URL . 'client/index');
} 

?>